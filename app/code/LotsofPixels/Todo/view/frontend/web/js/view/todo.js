define([
    'uiComponent',
    'jquery',
    'Magento_Ui/js/modal/confirm'
], function (Component, $, modal) {
    'use strict';

    return Component.extend({
        defaults: {
            tasks: [
             {id: 1, label: "Taak 1", status: false},
             {id: 2, label: "Taak 2", status: false},
             {id: 3, label: "Taak 3", status: false},
             {id: 4, label: "Taak 4", status: true},
          ],
    },

        initObservable: function () {
            this._super().observe(['tasks']);

            return this;
        },

        switchStatus: function (data, event) {
            const taskId = $(event.target).data('id');

            var items = this.tasks().map(function (task) {
                if (task.id === taskId) {
                    task.status = !task.status;
                }
                return task
            });

            this.tasks(items);
        },
        
        deleteTask:  function (taskId) {
            var self = this;

            modal({
                content: 'Are you sure ?',
                actions: {
                    confirm: function () {
                        var tasks = [];

                        if (self.tasks().length === 1) {
                            self.tasks(tasks);
                            return;
                        }

                        self.tasks().forEach(function (task) {
                            if (task.id !== taskId) {
                                tasks.push(task);
                            }
                        });

                        self.tasks(tasks);
                    }

                }
            });

            },
    });
});

