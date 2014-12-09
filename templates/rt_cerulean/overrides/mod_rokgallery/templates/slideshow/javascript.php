<?php
 /**
  * @version   $Id: javascript.php 12455 2013-08-05 17:53:49Z djamil $
  * @author    RocketTheme http://www.rockettheme.com
  * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
  * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
  */

global $gantry;

$no_captions_percent = 35;

echo "var rokgallery_slideshow;
window.addEvent('domready', function(){
	rokgallery_slideshow = new RokGallery.Slideshow('rg-".$passed_params->moduleid."', {
		onJump: function(index, bypass){
			if (!this.slideshowSpacer) this.slideshowSpacer = document.id('slideshow-spacer');
			this.animation.index = this.current;
			this.animation.setBackground(this.slices[index].getElement('img').get('src'));
			this.animation.setAnimation(this.options.animation);

			if (!bypass){
				this.animation.play();

				if (this.captions.length){
					if (this.current == index){
						this.captions[index].fade('in');
					} else {
						this.captions[this.current].fade('out');
						this.captions[index].fade('in');
					}
				}
			}

			if (this.slideshowSpacer && this.container.getParent('#rt-slideshow')){
				var height;
				this.slideshowSpacer.set('tween', {duration: 300, link: 'cancel'});
				height = this.container.offsetHeight - 120;
				this.slideshowSpacer.tween('height', height);
			}
		},
		animation: '".$passed_params->animation_type."',
		duration: ".$passed_params->animation_duration.",
		autoplay: {
			enabled: ".$passed_params->autoplay_enabled.",
			delay: ".$passed_params->autoplay_delay."
		}
	});
	try {
		RokMediaQueries.on('every', function(query){
			rokgallery_slideshow.jump(rokgallery_slideshow.current, true);
		});
	} catch(error) { if (typeof console != 'undefined') console.error('RokGallery [slideshow] Error while trying to add a RokMediaQuery \"match\" event', error); }

	//rokgallery_slideshow.jump.delay(1, rokgallery_slideshow, 0, true);
});
window.addEvent('load', function(){
	rokgallery_slideshow.jump(0, true);
});
";
