<?php

function delete_form($routerParams, $label = 'Delete')
{
    $form = Form::open(['method'=>'delete', 'route'=>$routerParams]);

    $form .= Form::submit($label, ['class'=>'btn btn-danger']);

    return $form .= Form::close();
}
