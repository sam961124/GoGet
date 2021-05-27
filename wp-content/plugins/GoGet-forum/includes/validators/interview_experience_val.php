<?php
namespace GoGetForums\includes;

class interview_experience_val extends validator
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get(): array
    {
        return array(
            GOGETFORUMS_FORM_PREFIX . 'company' => FILTER_SANITIZE_STRING,
            GOGETFORUMS_FORM_PREFIX . 'job_type'    => FILTER_SANITIZE_STRING,
            GOGETFORUMS_FORM_PREFIX . 'job_title'      => FILTER_SANITIZE_STRING,
            GOGETFORUMS_FORM_PREFIX . 'industry_category' => FILTER_SANITIZE_STRING,
            GOGETFORUMS_FORM_PREFIX . 'industry_subcategory'   => FILTER_SANITIZE_STRING,
            GOGETFORUMS_FORM_PREFIX . 'anonymous'    => FILTER_SANITIZE_STRING,
            GOGETFORUMS_FORM_PREFIX . 'author' => FILTER_SANITIZE_SPECIAL_CHARS,
            GOGETFORUMS_FORM_PREFIX . 'prepare' => FILTER_SANITIZE_SPECIAL_CHARS,
            GOGETFORUMS_FORM_PREFIX . 'interview_date' => FILTER_SANITIZE_STRING,
            GOGETFORUMS_FORM_PREFIX . 'interview_difficulty' => FILTER_SANITIZE_STRING,
            GOGETFORUMS_FORM_PREFIX . 'interview_result' => FILTER_SANITIZE_STRING,
            GOGETFORUMS_FORM_PREFIX . 'interview_level' =>  FILTER_SANITIZE_STRING
        );
    }
}