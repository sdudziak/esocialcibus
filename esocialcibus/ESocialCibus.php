<?php

class ESocialCibus extends CWidget
{
    public $width = '224';
    public $height = '224';
    public $shadow = true;
    public $linkColor = 'e95b24';

    public function run()
    {
        echo '<iframe src="http://socialcibus.com/widget?width=' . (!$this->shadow ? $this->width : ($this->width - 4)) . '&link_color=' . $this->linkColor . '" '
        . 'scrolling="no" '
        . 'frameBorder="0" '
        . 'style="border-width: 0; height: ' . $this->height . 'px; width: ' . $this->width . 'px;">'
        . '</iframe>';
    }

}
