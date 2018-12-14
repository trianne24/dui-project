<?php

class __Mustache_9dc6e899f1fcdaf823492e91240d48a2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="navbar">
';
        $buffer .= $indent . '    <a target="_blank" href="';
        $value = $this->resolveValue($context->find('courselink'), $context);
        $buffer .= $value;
        $buffer .= '">';
        $value = $this->resolveValue($context->find('coursename'), $context);
        $buffer .= $value;
        $buffer .= '</a>
';
        $buffer .= $indent . '    &raquo;
';
        $buffer .= $indent . '    <a target="_blank" href="';
        $value = $this->resolveValue($context->find('forumindexlink'), $context);
        $buffer .= $value;
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section18736ac7a7e3e335e3a7c814340188f4($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    &raquo;
';
        $buffer .= $indent . '    <a target="_blank" href="';
        $value = $this->resolveValue($context->find('forumviewlink'), $context);
        $buffer .= $value;
        $buffer .= '">';
        $value = $this->resolveValue($context->find('forumname'), $context);
        $buffer .= $value;
        $buffer .= '</a>
';
        // 'showdiscussionname' section
        $value = $context->find('showdiscussionname');
        $buffer .= $this->section67663f66142ade515131e50be3e13648($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('mod_forum/forum_post_email_htmlemail_body')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<hr />
';
        $buffer .= $indent . '<div class="mdl-align unsubscribelink">
';
        // 'unsubscribeforumlink' section
        $value = $context->find('unsubscribeforumlink');
        $buffer .= $this->sectionB8f2e62fcaabf15d7ccfd677a608ce98($context, $indent, $value);
        // 'unsubscribediscussionlink' section
        $value = $context->find('unsubscribediscussionlink');
        $buffer .= $this->section9e4298251e6eac0cb657974522a155b0($context, $indent, $value);
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->find('forumindexlink'), $context);
        $buffer .= $value;
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionFa8d7498858197168f261ad446f1cf7b($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '</div>
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

    private function section67663f66142ade515131e50be3e13648(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    &raquo;
    <a target="_blank" href="{{{ discussionlink }}}">{{{ discussionname }}}</a>
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
                
                $buffer .= $indent . '    &raquo;
';
                $buffer .= $indent . '    <a target="_blank" href="';
                $value = $this->resolveValue($context->find('discussionlink'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('discussionname'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1ed522570dbfad6cb06bd2fffa2fc3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unsubscribe, forum ';
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
                
                $buffer .= ' unsubscribe, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB8f2e62fcaabf15d7ccfd677a608ce98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="{{{ unsubscribeforumlink }}}">{{# str }} unsubscribe, forum {{/ str }}</a>&nbsp;
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
                
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('unsubscribeforumlink'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE1ed522570dbfad6cb06bd2fffa2fc3f($context, $indent, $value);
                $buffer .= '</a>&nbsp;
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f36a3a60538d683b50728e4edf76b18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unsubscribediscussion, forum ';
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
                
                $buffer .= ' unsubscribediscussion, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e4298251e6eac0cb657974522a155b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="{{{ unsubscribediscussionlink }}}">{{# str }} unsubscribediscussion, forum {{/ str }}</a>&nbsp;
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
                
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('unsubscribediscussionlink'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4f36a3a60538d683b50728e4edf76b18($context, $indent, $value);
                $buffer .= '</a>&nbsp;
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa8d7498858197168f261ad446f1cf7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' digestmailpost, forum ';
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
                
                $buffer .= ' digestmailpost, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
