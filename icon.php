<?php
/**
 * @package   Icon Element for Tutorial
 * @author    ZOO Mods Plus https://www.zoomodsplus.com
 * @copyright Copyright (C) Ray Lawlor - ZOO Mods Plus
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 */

/*
	Class: ElementIcon
		The Icon element class
*/

class ElementIcon extends Element implements iSubmittable
{


    public function hasValue($params = array())
    {
        return $this->get('value');
    }


    public function render($params = array())
    {
        $params = $this->app->data->create($params);

        return '<span uk-icon="icon: '. $this->get('value') .'; ratio: '. $params->get('size') .'"></span>';

    }


    public function edit()
    {

        $options = array(
            'home' => "Home",
            'user' => "User",
            'image' => "Image",
            'heart' => "Heart",
            'mail' => "Mail",
        );

       return $this->app->html->_('select.genericlist', $options, $this->getControlName('value'), null, 'value', 'text', $this->get('value'));

    }


    public function renderSubmission($params = array())
    {

        return false;

    }


    public function validateSubmission($value, $params)
    {

        return true;

    }

}
