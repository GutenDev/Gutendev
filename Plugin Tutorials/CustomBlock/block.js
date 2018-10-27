
( function() {
	var __ = wp.i18n.__; 
	var createElement = wp.element.createElement; 
	var registerBlockType = wp.blocks.registerBlockType; 


	registerBlockType(
		'customblock/textblock',
		{
		title: __('Our Custom Block'),
		icon: 'smiley',
		category: 'common',

		edit: function(props){
			return createElement(
				'p',
				{
					className: props.className,
				},
				'This text will be shown on the backend'
				);
		},

		save: function(props){
			return createElement(
				'p',
				{
					className:props.className,
				},
					'This will be shown on the frontend'
				);
		},

}
		);
})();