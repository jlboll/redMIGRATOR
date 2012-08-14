<?php
/**
 * jUpgrade
 *
 * @version             $Id$
 * @package             MatWare
 * @subpackage          com_jupgrade
 * @copyright           Copyright 2006 - 2011 Matias Aguire. All rights reserved.
 * @license             GNU General Public License version 2 or later.
 * @author              Matias Aguirre <maguirre@matware.com.ar>
 * @link                http://www.matware.com.ar
 */

// Require the category class
require_once JPATH_COMPONENT.'/includes/jupgrade.category.class.php';

/**
 * Upgrade class for Banners
 *
 * This class takes the banners from the existing site and inserts them into the new site.
 *
 * @since       0.4.5
 */
class jUpgradeBannersTracks extends jUpgrade
{
	/**
	 * @var         string  The name of the source database table.
	 * @since       0.4.5
	 */
	protected $source = '#__bannertrack';

	/**
	 * @var         string  The name of the destination database table.
	 * @since       0.4.5
	 */
	protected $destination = '#__banner_tracks';
}
