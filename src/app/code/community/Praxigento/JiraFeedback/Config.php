<?php
/**
 * Copyright (c) 2013, F. Lancer, MUN
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the
 * following conditions are met:
 *  - Redistributions of source code must retain the above copyright notice, this list of conditions and the following
 *      disclaimer.
 *  - Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the
 *      following disclaimer in the documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
 * INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 * WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
/**
 * Created by JetBrains PhpStorm.
 * User: Alex Gusev <flancer64@gmail.com>
 */
class Praxigento_JiraFeedback_Config
{
    /**
     * Enable/disable JIRA Feedback component on adminhtml.
     * @static
     * @return bool
     */
    public static function cfgAdminEnabled()
    {
        return filter_var(Mage::getStoreConfig('prxgt_jfb/general/adminhtml_enabled'), FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * Returns issue collector's code (HTML) to embed to the adminhtml.
     * @static
     * @return string
     */
    public static function cfgAdminCode()
    {
        $val = (string)Mage::getStoreConfig('prxgt_jfb/general/adminhtml_feedback_code');
        return $val;
    }

    /**
     * Enable/disable JIRA Feedback component on frontend.
     * @static
     * @return bool
     */
    public static function cfgFrontendEnabled()
    {
        return filter_var(Mage::getStoreConfig('prxgt_jfb/general/frontend_enabled'), FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * Returns issue collector's code (HTML) to embed to the frontend.
     * @static
     * @return string
     */
    public static function cfgFrontendCode()
    {
        $val = (string)Mage::getStoreConfig('prxgt_jfb/general/frontend_feedback_code');
        return $val;
    }
}
