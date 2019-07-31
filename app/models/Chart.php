<?php

namespace app\models;

use app\core\Model;

class Chart extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getStatsForAllCompanies()
    {
        $stats = [];
        $companies = $this->db->allRows("SELECT id, idcompany, full_company_name, description, site FROM company");
        $companiesTaskDoneCount = $this->db->allRows("SELECT COUNT(*) AS taskDone, idcompany AS companyId FROM tasks GROUP BY idcompany");
        $companiesOverdueCount = $this->db->allRows("SELECT COUNT(DISTINCT task_id, datetime) AS overdue, company_id AS companyId FROM events WHERE action = 'overdue' GROUP BY company_id");
        $companiesCommentCount = $this->db->allRows("SELECT COUNT(*) AS comment, u.idcompany AS companyId FROM comments c LEFT JOIN users u ON c.iduser = u.id WHERE c.status = 'comment' AND c.iduser > 1 GROUP BY u.idcompany");
        $companiesMailCount = $this->db->allRows("SELECT COUNT(DISTINCT m.message_id) as message, u1.idcompany AS companyId FROM mail m LEFT JOIN users u1 ON m.sender = u1.id WHERE sender > 1 AND recipient > 1 GROUP BY u1.idcompany");
        $companiesUserCount = $this->db->allRows("SELECT COUNT(*) as users, idcompany AS companyId FROM users WHERE is_fired = 0 GROUP BY idcompany");
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
        return $stats;
    }

}
