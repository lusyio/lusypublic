<?php

namespace app\models;

use app\core\Model;

class Chart extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getStatsForAllCompanies($filterActive = false)
    {
        $stats = [];
        $firstDay = strtotime('first day of this month midnight');
        $companies = $this->db->allRows("SELECT id, idcompany, full_company_name, description, site FROM company", [':firstDay' => $firstDay]);
        $companiesTaskDoneCount = $this->db->allRows("SELECT COUNT(DISTINCT t.id) AS taskDone, t.idcompany AS companyId FROM tasks t LEFT JOIN events e ON t.id = e.task_id WHERE e.action = 'workdone' AND e.datetime >= :firstDay GROUP BY t.idcompany", [':firstDay' => $firstDay]);
        $companiesOverdueCount = $this->db->allRows("SELECT COUNT(DISTINCT task_id, datetime) AS overdue, company_id AS companyId FROM events WHERE action = 'overdue' AND datetime >= :firstDay GROUP BY company_id", [':firstDay' => $firstDay]);
        $companiesCommentCount = $this->db->allRows("SELECT COUNT(DISTINCT c.id) AS comment, u.idcompany AS companyId FROM comments c LEFT JOIN users u ON c.iduser = u.id WHERE c.status = 'comment' AND c.datetime > :firstDay AND c.iduser > 1 GROUP BY u.idcompany", [':firstDay' => $firstDay]);
        $companiesMailCount = $this->db->allRows("SELECT COUNT(DISTINCT m.message_id) as message, u1.idcompany AS companyId FROM mail m LEFT JOIN users u1 ON m.sender = u1.id WHERE sender > 1 AND recipient > 1 AND datetime > :firstDay GROUP BY u1.idcompany", [':firstDay' => $firstDay]);
        $companiesUserCount = $this->db->allRows("SELECT COUNT(*) as users, idcompany AS companyId FROM users WHERE is_fired = 0 AND id > 1 GROUP BY idcompany");
        foreach ($companies as $company) {
            $stats[$company['id']] = [
                'taskDone' => 0,
                'overdue' => 0,
                'comment' => 0,
                'message' => 0,
                'score' => 0,
                'name' => $company['idcompany'],
                'fullName' => $company['full_company_name'],
                'description' => $company['description'],
                'site' => $company['site'],
                'users' => 0,
            ];
        }
        foreach ($companiesTaskDoneCount as $td) {
            $stats[$td['companyId']]['taskDone'] = $td['taskDone'];
        }
        foreach ($companiesOverdueCount as $ov) {
            $stats[$ov['companyId']]['overdue'] = $ov['overdue'];
        }
        foreach ($companiesCommentCount as $c) {
            $stats[$c['companyId']]['comment'] = $c['comment'];
        }
        foreach ($companiesMailCount as $m) {
            $stats[$m['companyId']]['message'] = $m['message'];
        }
        foreach ($companiesUserCount as $u) {
            $stats[$u['companyId']]['users'] = $u['users'];
        }
        foreach ($stats as $companyId => $values) {
            $stats[$companyId]['score'] = floor($values['taskDone'] - 10 * $values['overdue'] + 0.1 * ($values['comment'] + $values['message']));
        }
        if ($filterActive) {
            foreach ($stats as $companyId => $data) {
                if ($data['taskDone'] == 0 && $data['overdue'] == 0 && $data['comment'] == 0 && $data['message'] == 0) {
                    unset($stats[$companyId]);
                }
            }
        }
        usort($stats, function ($a, $b) {
            return $b['score'] - $a['score'];
        });
        return $stats;
    }

    public function getChartWinners()
    {
//        $startDate = date('Y-m', strtotime('first day of this month midnight -3 months'));
        $result = $this->db->allRows("SELECT cw.*, c.idcompany FROM chart_winners cw LEFT JOIN company c ON cw.company_id = c.id ORDER BY period DESC LIMIT 3");
        foreach ($result as $key => $row) {
            $dateArray = preg_split("~\-~", $row['period']);
            $result[$key]['year'] = $dateArray[0];
            $result[$key]['month'] = $dateArray[1];
        }
        return $result;
    }

}
