.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../../Includes.txt


.. _upgrades_start_5003000_gridelements_columns05:


Start: Columns 6
================

.. code:: php

	<?xml version="1.0" encoding="utf-8" standalone="yes" ?>
	<T3DataStructure>
		<meta>
			<langDisable>1</langDisable>
		</meta>
		<ROOT type="array">
			<type>array</type>
			<el type="array">
				<class type="array">
					<TCEforms type="array">
						<label>LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.flexform.class</label>
						<config type="array">
							<type>input</type>
							<size>10</size>
							<eval>trim</eval>
							<max>40</max>
						</config>
					</TCEforms>
				</class>
				<samecolumnheight type="array">
					<TCEforms type="array">
						<label>LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.flexform.samecolumnheight</label>
						<config type="array">
							<type>check</type>
							<default>0</default>
						</config>
					</TCEforms>
				</samecolumnheight>
				<columnslarge type="array">
					<TCEforms type="array">
						<label>LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.flexform.columnslarge</label>
						<config type="array">
							<type>select</type>
							<items type="array">
								<numIndex index='0' type='array'>
									<numIndex index='0'>1|2|3|3|2|1</numIndex>
									<numIndex index='1'>1/2/3/3/2/1</numIndex>
								</numIndex>
								<numIndex index='1' type='array'>
									<numIndex index='0'>1|2|3|1|2|3</numIndex>
									<numIndex index='1'>1/2/3/1/2/3</numIndex>
								</numIndex>
								<numIndex index='2' type='array'>
									<numIndex index='0'>1|1|1|1|1|7</numIndex>
									<numIndex index='1'>1/1/1/1/1/7</numIndex>
								</numIndex>
								<numIndex index='3' type='array'>
									<numIndex index='0'>1|1|1|1|7|1</numIndex>
									<numIndex index='1'>1/1/1/1/7/1</numIndex>
								</numIndex>
								<numIndex index='4' type='array'>
									<numIndex index='0'>1|1|1|7|1|1</numIndex>
									<numIndex index='1'>1/1/1/7/1/1</numIndex>
								</numIndex>
								<numIndex index='5' type='array'>
									<numIndex index='0'>1|1|7|1|1|1</numIndex>
									<numIndex index='1'>1/1/7/1/1/1</numIndex>
								</numIndex>
								<numIndex index='6' type='array'>
									<numIndex index='0'>1|7|1|1|1|1</numIndex>
									<numIndex index='1'>1/7/1/1/1/1</numIndex>
								</numIndex>
								<numIndex index='7' type='array'>
									<numIndex index='0'>1|1|1|1|4|4</numIndex>
									<numIndex index='1'>1/1/1/1/4/4</numIndex>
								</numIndex>
								<numIndex index='8' type='array'>
									<numIndex index='0'>1|1|1|4|1|4</numIndex>
									<numIndex index='1'>1/1/1/4/1/4</numIndex>
								</numIndex>
								<numIndex index='9' type='array'>
									<numIndex index='0'>1|1|4|1|1|4</numIndex>
									<numIndex index='1'>1/1/4/1/1/4</numIndex>
								</numIndex>
								<numIndex index='10' type='array'>
									<numIndex index='0'>1|4|1|1|1|4</numIndex>
									<numIndex index='1'>1/4/1/1/1/4</numIndex>
								</numIndex>
								<numIndex index='11' type='array'>
									<numIndex index='0'>1|1|1|4|4|1</numIndex>
									<numIndex index='1'>1/1/1/4/4/1</numIndex>
								</numIndex>
								<numIndex index='12' type='array'>
									<numIndex index='0'>1|1|4|1|4|1</numIndex>
									<numIndex index='1'>1/1/4/1/4/1</numIndex>
								</numIndex>
								<numIndex index='13' type='array'>
									<numIndex index='0'>1|4|1|1|4|1</numIndex>
									<numIndex index='1'>1/4/1/1/4/1</numIndex>
								</numIndex>
								<numIndex index='14' type='array'>
									<numIndex index='0'>1|1|4|4|1|1</numIndex>
									<numIndex index='1'>1/1/4/4/1/1</numIndex>
								</numIndex>
								<numIndex index='15' type='array'>
									<numIndex index='0'>1|4|1|4|1|1</numIndex>
									<numIndex index='1'>1/4/1/4/1/1</numIndex>
								</numIndex>
								<numIndex index='16' type='array'>
									<numIndex index='0'>1|4|4|1|1|1</numIndex>
									<numIndex index='1'>1/4/4/1/1/1</numIndex>
								</numIndex>
								<numIndex index='17' type='array'>
									<numIndex index='0'>2|2|2|2|2|2 (recommended)</numIndex>
									<numIndex index='1'>2/2/2/2/2/2</numIndex>
								</numIndex>
								<numIndex index='18' type='array'>
									<numIndex index='0'>3|2|1|1|2|3</numIndex>
									<numIndex index='1'>3/2/1/1/2/3</numIndex>
								</numIndex>
								<numIndex index='19' type='array'>
									<numIndex index='0'>3|2|1|3|2|1</numIndex>
									<numIndex index='1'>3/2/1/3/2/1</numIndex>
								</numIndex>
								<numIndex index='20' type='array'>
									<numIndex index='0'>4|1|1|1|1|4</numIndex>
									<numIndex index='1'>4/1/1/1/1/4</numIndex>
								</numIndex>
								<numIndex index='21' type='array'>
									<numIndex index='0'>4|1|1|1|4|1</numIndex>
									<numIndex index='1'>4/1/1/1/4/1</numIndex>
								</numIndex>
								<numIndex index='22' type='array'>
									<numIndex index='0'>4|1|1|4|1|1</numIndex>
									<numIndex index='1'>4/1/1/4/1/1</numIndex>
								</numIndex>
								<numIndex index='23' type='array'>
									<numIndex index='0'>4|1|4|1|1|1</numIndex>
									<numIndex index='1'>4/1/4/1/1/1</numIndex>
								</numIndex>
								<numIndex index='24' type='array'>
									<numIndex index='0'>4|4|1|1|1|1</numIndex>
									<numIndex index='1'>4/4/1/1/1/1</numIndex>
								</numIndex>
								<numIndex index='25' type='array'>
									<numIndex index='0'>7|1|1|1|1|1</numIndex>
									<numIndex index='1'>7/1/1/1/1/1</numIndex>
								</numIndex>
								<numIndex index='26' type='array'>
									<numIndex index='0'>12|12|12|12|12|12</numIndex>
									<numIndex index='1'>12/12/12/12/12/12</numIndex>
								</numIndex>
							</items>
						</config>
					</TCEforms>
				</columnslarge>
				<columnsmedium type="array">
					<TCEforms type="array">
						<label>Medium columns arrangement</label>
						<config type="array">
							<type>select</type>
							<items type="array">
								<numIndex index='0' type='array'>
									<numIndex index='0'>1|2|3|3|2|1</numIndex>
									<numIndex index='1'>1/2/3/3/2/1</numIndex>
								</numIndex>
								<numIndex index='1' type='array'>
									<numIndex index='0'>1|2|3|1|2|3</numIndex>
									<numIndex index='1'>1/2/3/1/2/3</numIndex>
								</numIndex>
								<numIndex index='2' type='array'>
									<numIndex index='0'>1|1|1|1|1|7</numIndex>
									<numIndex index='1'>1/1/1/1/1/7</numIndex>
								</numIndex>
								<numIndex index='3' type='array'>
									<numIndex index='0'>1|1|1|1|7|1</numIndex>
									<numIndex index='1'>1/1/1/1/7/1</numIndex>
								</numIndex>
								<numIndex index='4' type='array'>
									<numIndex index='0'>1|1|1|7|1|1</numIndex>
									<numIndex index='1'>1/1/1/7/1/1</numIndex>
								</numIndex>
								<numIndex index='5' type='array'>
									<numIndex index='0'>1|1|7|1|1|1</numIndex>
									<numIndex index='1'>1/1/7/1/1/1</numIndex>
								</numIndex>
								<numIndex index='6' type='array'>
									<numIndex index='0'>1|7|1|1|1|1</numIndex>
									<numIndex index='1'>1/7/1/1/1/1</numIndex>
								</numIndex>
								<numIndex index='7' type='array'>
									<numIndex index='0'>1|1|1|1|4|4</numIndex>
									<numIndex index='1'>1/1/1/1/4/4</numIndex>
								</numIndex>
								<numIndex index='8' type='array'>
									<numIndex index='0'>1|1|1|4|1|4</numIndex>
									<numIndex index='1'>1/1/1/4/1/4</numIndex>
								</numIndex>
								<numIndex index='9' type='array'>
									<numIndex index='0'>1|1|4|1|1|4</numIndex>
									<numIndex index='1'>1/1/4/1/1/4</numIndex>
								</numIndex>
								<numIndex index='10' type='array'>
									<numIndex index='0'>1|4|1|1|1|4</numIndex>
									<numIndex index='1'>1/4/1/1/1/4</numIndex>
								</numIndex>
								<numIndex index='11' type='array'>
									<numIndex index='0'>1|1|1|4|4|1</numIndex>
									<numIndex index='1'>1/1/1/4/4/1</numIndex>
								</numIndex>
								<numIndex index='12' type='array'>
									<numIndex index='0'>1|1|4|1|4|1</numIndex>
									<numIndex index='1'>1/1/4/1/4/1</numIndex>
								</numIndex>
								<numIndex index='13' type='array'>
									<numIndex index='0'>1|4|1|1|4|1</numIndex>
									<numIndex index='1'>1/4/1/1/4/1</numIndex>
								</numIndex>
								<numIndex index='14' type='array'>
									<numIndex index='0'>1|1|4|4|1|1</numIndex>
									<numIndex index='1'>1/1/4/4/1/1</numIndex>
								</numIndex>
								<numIndex index='15' type='array'>
									<numIndex index='0'>1|4|1|4|1|1</numIndex>
									<numIndex index='1'>1/4/1/4/1/1</numIndex>
								</numIndex>
								<numIndex index='16' type='array'>
									<numIndex index='0'>1|4|4|1|1|1</numIndex>
									<numIndex index='1'>1/4/4/1/1/1</numIndex>
								</numIndex>
								<numIndex index='17' type='array'>
									<numIndex index='0'>2|2|2|2|2|2 (recommended)</numIndex>
									<numIndex index='1'>2/2/2/2/2/2</numIndex>
								</numIndex>
								<numIndex index='18' type='array'>
									<numIndex index='0'>3|2|1|1|2|3</numIndex>
									<numIndex index='1'>3/2/1/1/2/3</numIndex>
								</numIndex>
								<numIndex index='19' type='array'>
									<numIndex index='0'>3|2|1|3|2|1</numIndex>
									<numIndex index='1'>3/2/1/3/2/1</numIndex>
								</numIndex>
								<numIndex index='20' type='array'>
									<numIndex index='0'>4|1|1|1|1|4</numIndex>
									<numIndex index='1'>4/1/1/1/1/4</numIndex>
								</numIndex>
								<numIndex index='21' type='array'>
									<numIndex index='0'>4|1|1|1|4|1</numIndex>
									<numIndex index='1'>4/1/1/1/4/1</numIndex>
								</numIndex>
								<numIndex index='22' type='array'>
									<numIndex index='0'>4|1|1|4|1|1</numIndex>
									<numIndex index='1'>4/1/1/4/1/1</numIndex>
								</numIndex>
								<numIndex index='23' type='array'>
									<numIndex index='0'>4|1|4|1|1|1</numIndex>
									<numIndex index='1'>4/1/4/1/1/1</numIndex>
								</numIndex>
								<numIndex index='24' type='array'>
									<numIndex index='0'>4|4|1|1|1|1</numIndex>
									<numIndex index='1'>4/4/1/1/1/1</numIndex>
								</numIndex>
								<numIndex index='25' type='array'>
									<numIndex index='0'>7|1|1|1|1|1</numIndex>
									<numIndex index='1'>7/1/1/1/1/1</numIndex>
								</numIndex>
								<numIndex index='26' type='array'>
									<numIndex index='0'>12|12|12|12|12|12</numIndex>
									<numIndex index='1'>12/12/12/12/12/12</numIndex>
								</numIndex>
							</items>
						</config>
					</TCEforms>
				</columnsmedium>
				<columnssmall type="array">
					<TCEforms type="array">
						<label>LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.flexform.columnssmall</label>
						<config type="array">
							<type>select</type>
							<items type="array">
								<numIndex index='0' type='array'>
									<numIndex index='0'>1|2|3|3|2|1</numIndex>
									<numIndex index='1'>1/2/3/3/2/1</numIndex>
								</numIndex>
								<numIndex index='1' type='array'>
									<numIndex index='0'>1|2|3|1|2|3</numIndex>
									<numIndex index='1'>1/2/3/1/2/3</numIndex>
								</numIndex>
								<numIndex index='2' type='array'>
									<numIndex index='0'>1|1|1|1|1|7</numIndex>
									<numIndex index='1'>1/1/1/1/1/7</numIndex>
								</numIndex>
								<numIndex index='3' type='array'>
									<numIndex index='0'>1|1|1|1|7|1</numIndex>
									<numIndex index='1'>1/1/1/1/7/1</numIndex>
								</numIndex>
								<numIndex index='4' type='array'>
									<numIndex index='0'>1|1|1|7|1|1</numIndex>
									<numIndex index='1'>1/1/1/7/1/1</numIndex>
								</numIndex>
								<numIndex index='5' type='array'>
									<numIndex index='0'>1|1|7|1|1|1</numIndex>
									<numIndex index='1'>1/1/7/1/1/1</numIndex>
								</numIndex>
								<numIndex index='6' type='array'>
									<numIndex index='0'>1|7|1|1|1|1</numIndex>
									<numIndex index='1'>1/7/1/1/1/1</numIndex>
								</numIndex>
								<numIndex index='7' type='array'>
									<numIndex index='0'>1|1|1|1|4|4</numIndex>
									<numIndex index='1'>1/1/1/1/4/4</numIndex>
								</numIndex>
								<numIndex index='8' type='array'>
									<numIndex index='0'>1|1|1|4|1|4</numIndex>
									<numIndex index='1'>1/1/1/4/1/4</numIndex>
								</numIndex>
								<numIndex index='9' type='array'>
									<numIndex index='0'>1|1|4|1|1|4</numIndex>
									<numIndex index='1'>1/1/4/1/1/4</numIndex>
								</numIndex>
								<numIndex index='10' type='array'>
									<numIndex index='0'>1|4|1|1|1|4</numIndex>
									<numIndex index='1'>1/4/1/1/1/4</numIndex>
								</numIndex>
								<numIndex index='11' type='array'>
									<numIndex index='0'>1|1|1|4|4|1</numIndex>
									<numIndex index='1'>1/1/1/4/4/1</numIndex>
								</numIndex>
								<numIndex index='12' type='array'>
									<numIndex index='0'>1|1|4|1|4|1</numIndex>
									<numIndex index='1'>1/1/4/1/4/1</numIndex>
								</numIndex>
								<numIndex index='13' type='array'>
									<numIndex index='0'>1|4|1|1|4|1</numIndex>
									<numIndex index='1'>1/4/1/1/4/1</numIndex>
								</numIndex>
								<numIndex index='14' type='array'>
									<numIndex index='0'>1|1|4|4|1|1</numIndex>
									<numIndex index='1'>1/1/4/4/1/1</numIndex>
								</numIndex>
								<numIndex index='15' type='array'>
									<numIndex index='0'>1|4|1|4|1|1</numIndex>
									<numIndex index='1'>1/4/1/4/1/1</numIndex>
								</numIndex>
								<numIndex index='16' type='array'>
									<numIndex index='0'>1|4|4|1|1|1</numIndex>
									<numIndex index='1'>1/4/4/1/1/1</numIndex>
								</numIndex>
								<numIndex index='17' type='array'>
									<numIndex index='0'>2|2|2|2|2|2 (recommended)</numIndex>
									<numIndex index='1'>2/2/2/2/2/2</numIndex>
								</numIndex>
								<numIndex index='18' type='array'>
									<numIndex index='0'>3|2|1|1|2|3</numIndex>
									<numIndex index='1'>3/2/1/1/2/3</numIndex>
								</numIndex>
								<numIndex index='19' type='array'>
									<numIndex index='0'>3|2|1|3|2|1</numIndex>
									<numIndex index='1'>3/2/1/3/2/1</numIndex>
								</numIndex>
								<numIndex index='20' type='array'>
									<numIndex index='0'>4|1|1|1|1|4</numIndex>
									<numIndex index='1'>4/1/1/1/1/4</numIndex>
								</numIndex>
								<numIndex index='21' type='array'>
									<numIndex index='0'>4|1|1|1|4|1</numIndex>
									<numIndex index='1'>4/1/1/1/4/1</numIndex>
								</numIndex>
								<numIndex index='22' type='array'>
									<numIndex index='0'>4|1|1|4|1|1</numIndex>
									<numIndex index='1'>4/1/1/4/1/1</numIndex>
								</numIndex>
								<numIndex index='23' type='array'>
									<numIndex index='0'>4|1|4|1|1|1</numIndex>
									<numIndex index='1'>4/1/4/1/1/1</numIndex>
								</numIndex>
								<numIndex index='24' type='array'>
									<numIndex index='0'>4|4|1|1|1|1</numIndex>
									<numIndex index='1'>4/4/1/1/1/1</numIndex>
								</numIndex>
								<numIndex index='25' type='array'>
									<numIndex index='0'>7|1|1|1|1|1</numIndex>
									<numIndex index='1'>7/1/1/1/1/1</numIndex>
								</numIndex>
								<numIndex index='26' type='array'>
									<numIndex index='0'>12|12|12|12|12|12</numIndex>
									<numIndex index='1'>12/12/12/12/12/12</numIndex>
								</numIndex>
							</items>
						</config>
					</TCEforms>
				</columnssmall>
				<classCol00 type="array">
					<TCEforms type="array">
						<label>LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.flexform.classCol00</label>
						<config type="array">
							<type>input</type>
							<size>10</size>
							<eval>trim</eval>
							<max>40</max>
						</config>
					</TCEforms>
				</classCol00>
				<classCol01 type="array">
					<TCEforms type="array">
						<label>LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.flexform.classCol01</label>
						<config type="array">
							<type>input</type>
							<size>10</size>
							<eval>trim</eval>
							<max>40</max>
						</config>
					</TCEforms>
				</classCol01>
				<classCol02 type="array">
					<TCEforms type="array">
						<label>LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.flexform.classCol02</label>
						<config type="array">
							<type>input</type>
							<size>10</size>
							<eval>trim</eval>
							<max>40</max>
						</config>
					</TCEforms>
				</classCol02>
				<classCol03 type="array">
					<TCEforms type="array">
						<label>LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.flexform.classCol03</label>
						<config type="array">
							<type>input</type>
							<size>10</size>
							<eval>trim</eval>
							<max>40</max>
						</config>
					</TCEforms>
				</classCol03>
				<classCol04 type="array">
					<TCEforms type="array">
						<label>LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.flexform.classCol04</label>
						<config type="array">
							<type>input</type>
							<size>10</size>
							<eval>trim</eval>
							<max>40</max>
						</config>
					</TCEforms>
				</classCol04>
				<classCol05 type="array">
					<TCEforms type="array">
						<label>LLL:EXT:start/Resources/Private/Language/Gridelements.xlf:gridelements.flexform.classCol05</label>
						<config type="array">
							<type>input</type>
							<size>10</size>
							<eval>trim</eval>
							<max>40</max>
						</config>
					</TCEforms>
				</classCol05>
			</el>
		</ROOT>
	</T3DataStructure>