<?php

namespace AppBundle\Xml;

class XmlReader
{

    public function __construct()
    {
        $this->enableUserErrorHandling();
    }

    public function getWebPageImages($url)
    {
        $doc = new \DOMDocument();

        if (!$doc->loadHTMLFile($url)) {
            $this->showErrors();
        }

        $xpath = new \DOMXpath($doc);
        $list = $xpath->query();


    }

    private function showErrors()
    {
        $errors = $this->getErrors();

        foreach ($errors as $error) {
            echo "$error\n\n";
        }
    }

    private function getErrors()
    {
        $result = [];
        $errors = libxml_get_errors();

        foreach ($errors as $error) {
            switch ($error->level) {
                case LIBXML_ERR_WARNING: $type = 'Warning'; break;
                case LIBXML_ERR_FATAL: $type = 'Fatal'; break;
                case LIBXML_ERR_ERROR: default: $type = 'Error'; break;
            }
            $result[] .= sprintf(
                '%s %s - line %d column %d - %s',
                $type,
                $error->code,
                $error->line,
                $error->column,
                $error->message
            );
        }

        libxml_clear_errors();

        return $result;
    }

    private function enableUserErrorHandling()
    {
        // Disable libxml errors and allow user to fetch error information as needed
        libxml_use_internal_errors(true);
    }

}