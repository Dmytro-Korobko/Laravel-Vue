@extends('app.emails.master')

@section('title', "You're invited to join {$nonprofit->name} on Tecdonor")

@section('content')
	@include('app.components.emails.p', [
		'content' => "Hi there!"
	])
	@include('app.components.emails.p', [
		'content' => "You have been invited to join the <em>{$nonprofit->name}</em> volunteers on Tecdonor."
	])
	@include('app.components.emails.p', [
		'content' => "Tecdonor is the first rewards program for volunteers. With every hour you contribute to a nonprofit organization, you earn reward points which can be spent with our corporate partners or donated back to a nonprofit."
	])
	@include('app.components.emails.p', [
		'content' => "Please click the button below to get started for free!"
	])
	@include('app.components.emails.button', [
		'url' => route('invitations.accept', $invitation->hash),
		'label' => "Accept Invitation"
	])
	@include('app.components.emails.p', [
		'content' => "If you have any questions, please reply to this email."
	])
	@include('app.components.emails.p', [
		'content' => "<em>&mdash; The Tecdonor Team</em>"
	])
@stop