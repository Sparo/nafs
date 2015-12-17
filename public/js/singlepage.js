var RowView = Backbone.View.extend({
	initialize: function(options) {
		// this.el = options.el;
		this.model = options.model;

		console.log(this);
	},
	events: {
		'click a.j-delete': 'deleteThisElement'
	},

	deleteThisElement: function(event) {
		event.preventDefault();

		var self = this;

		this.model.destroy({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success: function(data) {
				console.log(data);
				self.$el.css('border-color', 'red').css('color', 'red').children().last().html('Deleted');
			}
		});
	}
});

/**************************
 * Define models
 **************************/
var Event = Backbone.Model.extend();
var ViewsArray = [];

var EventCollection = Backbone.Collection.extend({
	model: Event,
	url: '/@admin/events',
	initialize: function() {
		this.fetch({
			success: function(data, t) {
				console.log('Data loaded...');
				_.each(data.models, function(model, index) {
					var rowView = new RowView({
						el: '#row' + (index + 1),
						model: model
					})
				});
			},
			error: function(error, t) {
				// console.log('error', error);
				// console.log('t', t);
			}
		})
	}
});

/**************************
 * Define views
 **************************/

var TableView = Backbone.View.extend({
	initialize: function(options) {
		this.collection = new EventCollection();
	}
});

var data_table = new TableView({
	el: $('#data_table')
});
