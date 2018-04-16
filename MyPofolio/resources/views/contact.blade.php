@extends('layout')

@section('content')

 <?php if($message = session('message')): ?>
        <div class="alert alert-success">
            <?php echo $message ?>
        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors->all() as $error): ?>
                    <li><?php echo $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="wrapper">
    <h1>Contact me</h1>

    <form method="post">

      <?php echo csrf_field() ?>

        @include('forms.text', [
            'label' => 'Name',
            'name' => 'name'
        ])

        @include('forms.text', [
            'label' => 'Email',
            'name' => 'email'
        ])
        <br/>
        <textarea name="message" rows="8" cols="80" placeholder="message"><?php echo old('message') ?></textarea>
        <br/>
        <input type="submit" name="" value="Submit">
        <br/>
        <br/>
    </form>
    </div>

@endsection