<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

$dictionary['email_marketing_prospect_lists'] = [
    'table'         => 'email_marketing_prospect_lists',
    'fields'        => [
        [
            'name' => 'id',
            'type' => 'varchar',
            'len'  => '36',
        ],
        [
            'name' => 'prospect_list_id',
            'type' => 'varchar',
            'len'  => '36',
        ],
        [
            'name' => 'email_marketing_id',
            'type' => 'varchar',
            'len'  => '36',
        ],
        [
            'name' => 'date_modified',
            'type' => 'datetime'
        ],
        [
            'name'    => 'deleted',
            'type'    => 'bool',
            'len'     => '1',
            'default' => '0'
        ],
    ],
    'indices'       => [
        [
            'name'   => 'email_mp_listspk',
            'type'   => 'primary',
            'fields' => ['id']
        ],
        [
            'name'   => 'email_mp_prospects',
            'type'   => 'alternate_key',
            'fields' => [
                'email_marketing_id',
                'prospect_list_id'
            ]
        ],
    ],
    'relationships' => [
        'email_marketing_prospect_lists' => [
            'lhs_module'        => 'EmailMarketing',
            'lhs_table'         => 'email_marketing',
            'lhs_key'           => 'id',
            'rhs_module'        => 'ProspectLists',
            'rhs_table'         => 'prospect_lists',
            'rhs_key'           => 'id',
            'relationship_type' => 'many-to-many',
            'join_table'        => 'email_marketing_prospect_lists',
            'join_key_lhs'      => 'email_marketing_id',
            'join_key_rhs'      => 'prospect_list_id',
        ],
    ]
];