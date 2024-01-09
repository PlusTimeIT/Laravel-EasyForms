# About

This package was created to help keep creating and managing forms easy.
The main purpose is to provide a central location to create and maintain forms,
so with that in mind this is meant to be coupled with
[Laravel Vue EasyForms](https://www.npmjs.com/package/laravel-vue-easyforms) Vue plugin.

## Vue Plugin

[Laravel Vue EasyForms](https://www.npmjs.com/package/laravel-vue-easyforms) is a simple drop in plugin that contains a
form loader component. It's as simple as passing in a form name and that component will load, validate and process
everything according to your backend application.

To find out how to implement the vue component - check out the documentation for the frontend side (also check the requirements for frontend)

## Design System

The Laravel package and Vue plugin are built around [Vuetify](https://vuetifyjs.com/).

## Validations

Validations are performed by Laravel for the most part. The generic validations are also available
on the frontend.

## Masking

Masking is currently handled by [V-Maska](https://beholdr.github.io/maska/#/)

## Requirements

The documentation is created for `Laravel 10+` only. While this package may work in other versions, no support or
documentation is provided for those.

You also need to make sure your [Laravel Vue EasyForms](https://www.npmjs.com/package/laravel-vue-easyforms)
version is `0.4.38+`

| Package | Min Version |
| :------ | :---------- |
| PHP     | 8.1+        |
| Laravel | 10+         |
