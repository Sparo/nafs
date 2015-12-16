var RowView = Backbone.View.extend({
	initialize: function(options) {
		console.log(this);
		this.model = options.model;
	},
	events: {
		'click a.j-delete': 'deleteThisElement'
	},

	deleteThisElement: function(e) {
		console.log($(this.el));
		return;
		this.model.destroy({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success: function(data) {
				console.log(data);
				this.$el.css('border-color', 'red');
			}
		});
		console.log(e);
		console.log(this.model);
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
				_.each(data.models, function(model, index) {
					var rowView = new RowView({
						el: '#row' + model.get('id'),
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

console.log(ViewsArray);
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
