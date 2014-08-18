<?php


class Hero extends Eloquent {
	
	public $timestamps = true;

	public $fillable = [
		'name', 
		'alias',
		'description',
		'image',
		'type',
		'attack_type',
		'strength',
		'agility',
		'intelligence',
		'health',
		'mana',
		'damage_max',
		'damage_min',
		'range',
		'armor',
		'movement',
	];
}