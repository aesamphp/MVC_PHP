<?php


namespace PHPMVC\LIB\Template;


trait TemplateHelper
{
    public function matchUrl($url)
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === $url;
    }

    public function showValue($fieldName, $object = null)
    {
        return isset($_POST[$fieldName]) ? $_POST[$fieldName] : (is_null($object) ? '' : $object->$fieldName);
    }

    public function labelFloat($fieldName, $object = null)
    {
        return ((isset($_POST[$fieldName]) && !empty($_POST[$fieldName])) || (null !== $object && $object->$fieldName !== null)) ? ' class="floated"' : '';
    }

}