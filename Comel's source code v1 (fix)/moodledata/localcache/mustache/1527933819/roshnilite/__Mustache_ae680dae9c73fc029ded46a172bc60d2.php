<?php

class __Mustache_ae680dae9c73fc029ded46a172bc60d2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $this->resolveValue($context->find('coursename'), $context);
        $buffer .= $indent . $value;
        $buffer .= ' -> ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section18736ac7a7e3e335e3a7c814340188f4($context, $indent, $value);
        $buffer .= ' -> ';
        $value = $this->resolveValue($context->find('forumname'), $context);
        $buffer .= $value;
        // 'showdiscussionname' section
        $value = $context->find('showdiscussionname');
        $buffer .= $this->section3514c400b60a81611b3557f1f9b759bc($context, $indent, $value);
        $buffer .= '
';
        $value = $this->resolveValue($context->find('permalink'), $context);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $value = $this->resolveValue($context->find('subject'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section1db6c95ffa3d0c5559a7f72a44248041($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '---------------------------------------------------------------------
';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->find('attachments'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '---------------------------------------------------------------------
';
        // 'canreply' section
        $value = $context->find('canreply');
        $buffer .= $this->section5b9099dbcdc1680690e8c4d924f61b96($context, $indent, $value);
        // 'unsubscribeforumlink' section
        $value = $context->find('unsubscribeforumlink');
        $buffer .= $this->sectionC54999dc8180d71daf0fb8cbe8eb77d8($context, $indent, $value);
        // 'unsubscribediscussionlink' section
        $value = $context->find('unsubscribediscussionlink');
        $buffer .= $this->sectionF5215fe9a08773b7baed34c3d830194c($context, $indent, $value);
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE91f0781e7dab670c281be50080c244e($context, $indent, $value);
        $buffer .= '
';

        return $buffer;
    }

    private function section18736ac7a7e3e335e3a7c814340188f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' forums, forum ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' forums, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3514c400b60a81611b3557f1f9b759bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' -> {{{ discussionname }}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' -> ';
                $value = $this->resolveValue($context->find('discussionname'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section111d6069f1960ebf0926cd420737b241(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{ authorfullname }}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('authorfullname'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE63a53b1895395e45a30eff532a83baf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{ postdate }}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('postdate'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1db6c95ffa3d0c5559a7f72a44248041(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' bynameondate, forum, {
        "name": {{# quote }}{{{ authorfullname }}}{{/ quote }},
        "date": {{# quote}}{{ postdate }}{{/ quote }}
    } ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' bynameondate, forum, {
';
                $buffer .= $indent . '        "name": ';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section111d6069f1960ebf0926cd420737b241($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '        "date": ';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->sectionE63a53b1895395e45a30eff532a83baf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC592552c1ff3202508cb2733a0084f58(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{ coursename }}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('coursename'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section70990c927dd88abe3c03c413875f0d5f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{ replylink }}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('replylink'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c2e127aab99cc160f48de2c72bb0570(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postmailinfolink, forum, {
        "coursename": {{# quote }}{{{ coursename }}}{{/ quote }},
        "replylink": {{# quote }}{{ replylink }}{{/ quote }}
    } ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' postmailinfolink, forum, {
';
                $buffer .= $indent . '        "coursename": ';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->sectionC592552c1ff3202508cb2733a0084f58($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '        "replylink": ';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section70990c927dd88abe3c03c413875f0d5f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b9099dbcdc1680690e8c4d924f61b96(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{# str }} postmailinfolink, forum, {
        "coursename": {{# quote }}{{{ coursename }}}{{/ quote }},
        "replylink": {{# quote }}{{ replylink }}{{/ quote }}
    } {{/ str }}
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0c2e127aab99cc160f48de2c72bb0570($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a99209d461a5aa37d3659254c8a4033(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unsubscribelink, forum, {{{ unsubscribeforumlink }}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' unsubscribelink, forum, ';
                $value = $this->resolveValue($context->find('unsubscribeforumlink'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC54999dc8180d71daf0fb8cbe8eb77d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{# str }} unsubscribelink, forum, {{{ unsubscribeforumlink }}} {{/ str }}
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8a99209d461a5aa37d3659254c8a4033($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6896c6fbc21a61fc7a2507b64726bc92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unsubscribediscussionlink, forum, {{{ unsubscribediscussionlink }}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' unsubscribediscussionlink, forum, ';
                $value = $this->resolveValue($context->find('unsubscribediscussionlink'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5215fe9a08773b7baed34c3d830194c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{# str }} unsubscribediscussionlink, forum, {{{ unsubscribediscussionlink }}} {{/ str }}
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6896c6fbc21a61fc7a2507b64726bc92($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE91f0781e7dab670c281be50080c244e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' digestmailpostlink, forum, {{{ forumindexlink }}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' digestmailpostlink, forum, ';
                $value = $this->resolveValue($context->find('forumindexlink'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
