<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getReconciliationReportRowsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201902\ReconciliationReportRowPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201902\ReconciliationReportRowPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201902\ReconciliationReportRowPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201902\ReconciliationReportRowPage $rval
     * @return \Google\AdsApi\AdManager\v201902\getReconciliationReportRowsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
