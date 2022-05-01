@extends('layouts.app')

@section('content')
<div>
    <form action="">
        <h4>Template language</h4>
        <label for="tempLang">persian</label>
        <input type="radio" name="tempLang" value="persian" checked>
        <label for="tempLang">English</label>
        <input type="radio" name="tempLang" value="english">
        <label for="haveSideBar">Include Side bar</label>
        <input type="checkbox" name="haveSideBar" id="haveSideBar">
        <label for="leftSideBar">Put side bar on left</label>
        <input type="checkbox" name="leftSideBar" id="leftSideBar">
        <label for="haveHeader">Include Header</label>
        <input type="checkbox" name="haveHeader" id="haveHeader">
        <label for="haveFooter">IncludeFooter</label>
        <input type="checkbox" name="haveFooter" id="haveFooter">
        <label for="tempName">Template Name</label>
        <input type="text" name="tempName" id="tempName" placeholder="word | art | sport... template">


        <label for="isPublic">Make this template public</label>
        <input type="checkbox" name="isPublic" id="isPublic">

        <button type="button" id="addTextElem">Add description Element</button>
        <button type="button" id="addFileElem">Add Image Input</button>
        <button type="button" id="addListElem">Add List Element</button>
        <button type="button" id="AddTwoIndentElem">Add two Indent Element</button>
        <button type="button" id="addIconList">Add list with icon</button>
    </form>
</div>
@endsection
