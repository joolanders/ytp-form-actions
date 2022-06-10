<?php

namespace YOOtheme\YOOessentials\MyAction;

use ZOOlanders\YOOessentials\Form\Actions\StandardAction;
use ZOOlanders\YOOessentials\Form\Http\FormSubmissionResponse;

class Action extends StandardAction
{
    public const NAME = 'myaction';

    public function __invoke(FormSubmissionResponse $response, callable $next): FormSubmissionResponse
    {
        // the Form class holds all the form configurations
        $form = $response->submission()->form();

        // the user submitted data
        $data = $response->submission()->data();

        // the action configuration
        $config = $this->config;

        // append or change the submitted data
        $data['new_key'] = 'new value';
        $response->submission()->setData($data);

        // use the submission parseTags helper to replace content placeholders
        // with the submitted data, eg `{myname}` becomes `John`
        $message = $response->submission()->parseTags($config('content', ''));

        // append data to the response for next action to deal with
        // or to pick it up within the client response
        return $next($response->withData([
            'message' => $message
        ]));
    }
}
