'use strict';

/**
 * config
 */
var Host = 'http://songzhumei.local/revinyl/docroot/index.php/';

var App = window.App = {};
var Util = App.Util = {};
var Config = App.Config = {};
var Page = App.Page = {};
var Route = App.Route = {
	record_list: 'record/total',
	record_detail: 'record/detail'
};

/**
 * dispatcher
 */
Util.dispatcher = function (path, callback) {
	this.path_func = this.path_func || [];

	if (callback) return this.path_func.push([path, callback]);

	for (var i = 0, l = this.path_func.length; i < l; ++i) {
		var func = this.path_func[i];
		var match = path.match(func[0]);
		match && func[1](match);
	}
};

/**
 * url Util
 */
Util.url = (function () {

	return {
		/*
		 * @param {Object} hash
		 */
		getHash: function () {
			var path = location.hash,
				hash = {},
				param = [],
				tmp = [];
			if (!path || !/^\#.*=.*/.test(path)) {
				return hash;
			}

			path = path.substr(1);
			param = path.split(/&/g);

			_.each(param, function (item) {
				tmp = item.split(/=/);
				hash[tmp[0]] = decodeURI(tmp[1]);
				// query[tmp[0]] = tmp[1];
			});

			return hash;
		},

		/*
		 * @param {String} path
		 * @param {Object} query
		 */
		getQuery: function (path) {
			var query = {},
				param = [],
				tmp = [];

			if (!path || !/^\?.*=.*/.test(path)) {
				return query;
			}

			path = path.substr(1);
			param = path.split(/&/g);

			_.each(param, function (item, index) {
				tmp = item.split(/=/);
				query[tmp[0]] = decodeURI(tmp[1]);
			});

			return query;
		},
		/*
		 * @param {Object} query
		 * @param {String} path
		 */
		setQuery: function (query) {
			var path = "?";
			_.each(query, function (value, key, index) {
				path += key + '=' + value + '&';
			});
			path = path.substr(0, (path.length - 1));
			return path;
		},


		getLastPath: function () {
			return location.pathname.split('/').pop();
		},

		/*
		 *
		 */
		concatPath: function (path1, path2) {
			var path1Flag = path1.substr(-1, 1) === '/' ? true : false,
				path2Flag = path2.substr(0, 1) === '/' ? true : false,
				concatPath = '';

			if (path1Flag === true && path2Flag === true) {
				concatPath = path1 + path2.substr(1);
			} else if (path1Flag === true || path2Flag === true) {
				concatPath = path1 + path2;
			} else {
				concatPath = path1 + '/' + path2;
			}

			return concatPath;
		}

	};
})();

/**
 * String helper
 */
Util.string = (function () {
	return {
		path_join: function () {
			String.prototype.path_join = function () {
				var current = this,
					args = Array.prototype.slice.call(arguments);

				args.forEach(function (elem, i) {

					var ending = current[current.length - 1],
						starting = elem[0];

					if (ending !== '/')
						current = current + '/';

					if (starting === '/')
						current += elem.substring(1);
					else
						current += elem
				});

				return current
			};
		},
		format: function () {
			String.prototype.format = function () {
				var formatted = this;
				for (var i = 0; i < arguments.length; i++) {
					var regexp = new RegExp('\\{' + i + '\\}', 'gi');
					formatted = formatted.replace(regexp, arguments[i])
				}
				return formatted
			};
		},
		insert: function () {
			Array.prototype.insert = function (index, item) {
				this.splice(index, 0, item);
			};
		}
	}

})();

/**
 * on domcontent loaded
 */
$(function () {
	var url = window.location.href;

	/**
	 * all
	 */
	Util.dispatcher('.', function () {
		Page.all.init();
		Page.record_list.init();
	});

	/**
	 * each page
	 */
	if (url.match(Route.record_detail) != null) {

	}
	Util.dispatcher(url);


});

/**
 *Page all init
 */
Page.all = (function () {
	var init = function () {
		Util.string.path_join();
		Util.string.format();
	};
	return {
		init: init
	}
})();

/**
 *Page record list
 */
Page.record_list = (function () {
	var init = function () {
		render();
		bind();
	};
	var render = function () {
		$('#datepicker').datepicker({
			autoclose: true
		});
	};

	var bind = function () {
		$('#add_detial_btn').click(function () {
			window.location.href = Host.path_join("record/detail");
		});

		$('.list-item').click(function () {
			var id = $(this).data('id');
			window.location.href = Host.path_join('record/detail/{0}').format(id);

		});
	};
	return {
		init: init
	}
})();
