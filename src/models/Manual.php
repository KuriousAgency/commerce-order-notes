<?php
/**
 * Commerce Order Notes plugin for Craft CMS 3.x
 *
 * Add notes to an order, they can also affect price.
 *
 * @link      https://kurious.agency
 * @copyright Copyright (c) 2018 Kurious Agency
 */

namespace kuriousagency\commerce\ordernotes\models;

use kuriousagency\commerce\ordernotes\OrderNotes;
use craft\elements\User;
use craft\commerce\elements\Order;

use Craft;
use craft\base\Model;

/**
 * @author    Kurious Agency
 * @package   CommerceOrderNotes
 * @since     1.0.0
 */
class Manual extends Note
{
    // Public Properties
    // =========================================================================


    // Public Methods
	// =========================================================================
	public function getName()
	{
		return 'Manual Discount';
	}
	
	public function getProperties()
	{
		// available: comments, value, qty, code, email, add
		return ['comments', 'value'];
	}

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['orderId', 'userId', 'comments', 'type', 'value'], 'required'],
        ];
    }
}
