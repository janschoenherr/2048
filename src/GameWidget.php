<?php

namespace Pagekit\_2048;

use Pagekit\Widget\Model\Type;
use Pagekit\Widget\Model\WidgetInterface;

class GameWidget extends Type
{
    /**
     * @var bool
     */
    protected static $created;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return 'widget.2048';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return __('2048 - The Game!');
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription(WidgetInterface $widget = null)
    {
        return __('Join the numbers and get to the 2048 tile!');
    }

    /**
     * {@inheritdoc}
     */
    public function render(WidgetInterface $widget, $options = array())
    {
        if (self::$created) {
            return __('This widget may be published once only.');
        }
        self::$created = true;
        return $this('view')->render('2048/2048.razr.php');
    }

    /**
     * {@inheritdoc}
     */
    public function renderForm(WidgetInterface $widget)
    {
        return __('Press Save and enjoy!');
    }
}
