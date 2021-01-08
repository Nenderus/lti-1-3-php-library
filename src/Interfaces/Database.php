<?php
namespace Packback\Lti1p3\Interfaces;

interface Database
{
    public function findRegistrationByIssuer($iss, $clientId = null);
    public function findDeployment($iss, $deploymentId, $clientId = null);
}
