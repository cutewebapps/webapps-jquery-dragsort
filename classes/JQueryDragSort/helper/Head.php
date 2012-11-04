<?php

class JQueryDragSort_HeadHelper extends App_ViewHelper_Abstract
{
    public function head()
    {
            $this->getView()->broker()->headScript()->append(
                $this->getView()->staticpath() . '/jquery-dragsort/js/jquery.dragsort-0.4.2.min.js', 'jquery' );
    }
}