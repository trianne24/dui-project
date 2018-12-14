<?php

class __Mustache_8ec1bd4b02c43845cf561172d6403963 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<table border="0" cellpadding="3" cellspacing="0" class="forumpost">
';
        $buffer .= $indent . '    <tr class="header">
';
        $buffer .= $indent . '        <td width="35" valign="top" class="picture left">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('authorpicture'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </td>
';
        $buffer .= $indent . '        <td class="topic ';
        // 'firstpost' section
        $value = $context->find('firstpost');
        $buffer .= $this->section9434d5771c4657afdd045de3a17d59b3($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <div class="subject">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('subject'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="author">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC9016969d99135c987ec0fb5d8ec5284($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </td>
';
        $buffer .= $indent . '    </tr>
';
        $buffer .= $indent . '    <tr>
';
        $buffer .= $indent . '        <td class="left side" valign="top">
';
        // 'grouppicture' section
        $value = $context->find('grouppicture');
        $buffer .= $this->sectionDd3d7257ddceffcbe77247b5b3a7c321($context, $indent, $value);
        // 'grouppicture' inverted section
        $value = $context->find('grouppicture');
        if (empty($value)) {
            
            $buffer .= $indent . '                &nbsp;
';
        }
        $buffer .= $indent . '        </td>
';
        $buffer .= $indent . '        <td class="content">
';
        // 'attachments' section
        $value = $context->find('attachments');
        $buffer .= $this->section230300a600c51b008cec801266493f47($context, $indent, $value);
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="commands">
';
        // 'firstpost' inverted section
        $value = $context->find('firstpost');
        if (empty($value)) {
            
            $buffer .= $indent . '                    <a target="_blank" href="';
            $value = $this->resolveValue($context->find('parentpostlink'), $context);
            $buffer .= $value;
            $buffer .= '">
';
            $buffer .= $indent . '                        ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section08cb9137143cabe4f717457d440b51b2($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                    </a>
';
            // 'canreply' section
            $value = $context->find('canreply');
            $buffer .= $this->section7497d1146f6de4ab75ae38921abe6c40($context, $indent, $value);
        }
        // 'canreply' section
        $value = $context->find('canreply');
        $buffer .= $this->section7cae53c7b73054fe6978690278c9fa88($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="link">
';
        $buffer .= $indent . '                <a target="_blank" href="';
        $value = $this->resolveValue($context->find('permalink'), $context);
        $buffer .= $value;
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9717eb53ad3b343a31f7f2350a5c3b05($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </td>
';
        $buffer .= $indent . '    </tr>
';
        $buffer .= $indent . '</table>
';

        return $buffer;
    }

    private function section9434d5771c4657afdd045de3a17d59b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'starter';
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
                
                $buffer .= 'starter';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6239dd54c1dadeaf5476db1874bed6fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a target=\'_blank\' href=\'{{{ authorlink }}}\'>{{ authorfullname }}</a>';
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
                
                $buffer .= '<a target=\'_blank\' href=\'';
                $value = $this->resolveValue($context->find('authorlink'), $context);
                $buffer .= $value;
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('authorfullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>';
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

    private function sectionC9016969d99135c987ec0fb5d8ec5284(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' bynameondate, forum, {
                        "name": {{# quote }}<a target=\'_blank\' href=\'{{{ authorlink }}}\'>{{ authorfullname }}</a>{{/ quote }},
                        "date": {{# quote }}{{ postdate }}{{/ quote }}
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
                
                $buffer .= ' bynameondate, forum, {
';
                $buffer .= $indent . '                        "name": ';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section6239dd54c1dadeaf5476db1874bed6fc($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '                        "date": ';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->sectionE63a53b1895395e45a30eff532a83baf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd3d7257ddceffcbe77247b5b3a7c321(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{ grouppicture }}}
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
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('grouppicture'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section230300a600c51b008cec801266493f47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="attachments">
                    {{{ attachments }}}
                </div>
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
                
                $buffer .= $indent . '                <div class="attachments">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('attachments'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08cb9137143cabe4f717457d440b51b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' parent, forum ';
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
                
                $buffer .= ' parent, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7497d1146f6de4ab75ae38921abe6c40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        |
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
                
                $buffer .= $indent . '                        |
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD469667440754f9f1f6f320a0cf89269(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reply, forum ';
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
                
                $buffer .= ' reply, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7cae53c7b73054fe6978690278c9fa88(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a target="_blank" href="{{{ replylink }}}">
                        {{# str }} reply, forum {{/ str }}
                    </a>
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
                
                $buffer .= $indent . '                    <a target="_blank" href="';
                $value = $this->resolveValue($context->find('replylink'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD469667440754f9f1f6f320a0cf89269($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9717eb53ad3b343a31f7f2350a5c3b05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postincontext, forum ';
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
                
                $buffer .= ' postincontext, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
