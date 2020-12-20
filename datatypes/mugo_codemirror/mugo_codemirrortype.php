<?php

class MugoCodeMirrorType extends eZTextType
{
	const DATA_TYPE_STRING = 'mugo_codemirror';

	public function __construct()
	{
		eZDataType::__construct(
			self::DATA_TYPE_STRING,
			ezpI18n::tr( 'kernel/classes/datatypes', 'Mugo CodeMirror', 'Datatype name' ),
			array( 'serialize_supported' => true )
		);
	}
}

eZDataType::register( MugoCodeMirrorType::DATA_TYPE_STRING, 'MugoCodeMirrorType' );

