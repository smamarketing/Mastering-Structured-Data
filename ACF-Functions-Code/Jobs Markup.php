<?php
/***Job Markup***/

function job_markup() {
    global $post;

    if( has_tag('job'))
    {

    $schema = array(

 "@context" => "https://schema.org/",
  "@type" => "JobPosting",
  "title" => get_field('job_title'),
  "description" => get_field('jobs_description_in_html'),
  "identifier" => array(
    "@type" => "PropertyValue",
    "name" => get_field('company'),
    "value" => get_field('identifier_')
  ),
  "hiringOrganization" => array(
    "@type" => "Organization",
    "name" => get_field('company'),
    "sameAs" => get_field('company_url')
  ),
  "industry" => get_field('industry'),
  "workHours" => get_field('work_hours'),
  "employmentType" => get_field('employment_type'),
  "datePosted" => get_field('date_posted'),
  "validThrough" => get_field('expire_date'),
  "applicantLocationRequirements" => array (
    "@type" => Country,
    "name" => get_field('country')
  ),
  "jobLocationType" => get_field('job_location_type'),
  "baseSalary" => array(
    "@type" => "MonetaryAmount",
    "currency" => "USD",
    "value" => array(
      "@type" => "QuantitativeValue",
      "unitText" => "YEAR",
      "value" => get_field('salary_or_min_salary')
    )
  ),
  "responsibilities" => get_field('responsibilities'),
  "skills" => get_field('skills'),
  "qualifications" => get_field('qualifications'),
  "educationRequirements" => get_field('education_requirements'),
  "experienceRequirements" => get_field('experience_requirements')

  );

    	   echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
}};

add_action('wp_head', 'job_markup');

?>