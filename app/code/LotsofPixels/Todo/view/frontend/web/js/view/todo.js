define(['uiComponent'], function (Component) {
    'use strict';

    return Component.extend({
        defaults: {
            tasks: [
             {label: "Taak 1"},
             {label: "Taak 2"},
             {label: "Taak 3"},
             {label: "Taak 4"},
          ]
    }
    });
});
