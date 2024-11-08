@include('common.header', ['msg'=>"This is Header"])

<x-messanger-banner
    _msg="Log in Successful (called from home)" class="success"/>

<x-messanger-banner 
    _msg="Log Out Successful (called from home)" class="failed"/>


<h1>Home Page</h1>

@include('common.about', ['msg'=>"This is About"])

<style>
    .success{
        background: lightgreen;
        color: green;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px

    }
    .failed{
        background: lightcoral;
        color: black;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px
    }
</style>