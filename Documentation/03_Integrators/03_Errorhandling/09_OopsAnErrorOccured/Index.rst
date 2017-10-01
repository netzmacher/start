.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _integrators-errorhandling-oopsanerroroccured:


Oops, an error occured
======================

Some times you will get a prompt like:

* Oops, an error occurred! Code: 2017070807364223a7bd4d

Problem
-------

Prompt hasn't helpful information

Solution
--------

Try, to disable the TYPO3 exception handlers:

* System > Install

* All Configuration

Filter by: exceptionhandler

Set empty values:

* [SYS][productionExceptionHandler] = 

* [SYS][debugExceptionHandler] = 

Sometimes the disabling of exceptionhandling doesn't work :( I don't know why :(

After debugging set exception handling to the default values:

* [SYS][productionExceptionHandler] = TYPO3\\CMS\\Core\\Error\\ProductionExceptionHandler

* [SYS][debugExceptionHandler] = TYPO3\\CMS\\Core\\Error\\DebugExceptionHandler

* [SYS][errorHandler] = TYPO3\\CMS\\Core\\Error\\ErrorHandler