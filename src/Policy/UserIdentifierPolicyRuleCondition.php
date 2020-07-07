<?php
/*********************************************************************************/
/**   Copyright 2017 - Present Okta, Inc.                                       **/
/**                                                                             **/
/**   Licensed under the Apache License, Version 2.0 (the "License");           **/
/**   you may not use this file except in compliance with the License.          **/
/**   You may obtain a copy of the License at                                   **/
/**                                                                             **/
/**        http://www.apache.org/licenses/LICENSE-2.0                           **/
/**                                                                             **/
/**   Unless required by applicable law or agreed to in writing, software       **/
/**   distributed under the License is distributed on an "AS IS" BASIS,         **/
/**   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  **/
/**   See the License for the specific language governing permissions and       **/
/**   limitations under the License.                                            **/
/*********************************************************************************/

/************************************************/
/** This file is auto-generated.  Do Not Edit! **/
/************************************************/

namespace Okta\Policy;

class UserIdentifierPolicyRuleCondition extends \Okta\Resource\AbstractResource
{
    const TYPE = 'type';
    const PATTERNS = 'patterns';
    const ATTRIBUTE = 'attribute';


    /**
     * Set the Type.
     *
     * @param mixed $type The type to set.
     * @return self
     */
    function setType($type) : UserIdentifierPolicyRuleCondition
    {
        $this->setProperty(
            self::TYPE,
            $type
        );
    
        return $this;
    }
    
    /**
     * Set the Patterns.
     *
     * @param mixed $patterns The patterns to set.
     * @return self
     */
    function setPatterns($patterns) : UserIdentifierPolicyRuleCondition
    {
        $this->setProperty(
            self::PATTERNS,
            $patterns
        );
    
        return $this;
    }
    
    /**
     * Set the Attribute.
     *
     * @param mixed $attribute The attribute to set.
     * @return self
     */
    function setAttribute($attribute) : UserIdentifierPolicyRuleCondition
    {
        $this->setProperty(
            self::ATTRIBUTE,
            $attribute
        );
    
        return $this;
    }
    
    /**
     * Get the Type.
     *
     * @param mixed $type The type to set.
     * @return string
     */
    function getType() : string
    {
        return $this->getProperty(
            self::TYPE,
        );
    }
    
    /**
     * Get the Patterns.
     *
     * @param mixed $patterns The patterns to set.
     * @return array
     */
    function getPatterns() : array
    {
        return $this->getProperty(
            self::PATTERNS,
        );
    }
    
    /**
     * Get the Attribute.
     *
     * @param mixed $attribute The attribute to set.
     * @return string
     */
    function getAttribute() : string
    {
        return $this->getProperty(
            self::ATTRIBUTE,
        );
    }
    

}