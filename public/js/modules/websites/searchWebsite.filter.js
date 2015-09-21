/**
 * notos.websites
 * FILTER: SearchWebsite
 */
(function () {
    'use strict';

    angular
        .module('notos.websites')
        .filter('SearchWebsite', SearchWebsite);

    /**
     *
     */
    function SearchWebsite(_) {
        return function (websites, filter) {
            var filtered = [];
            var terms = filter.terms === '' ? null : filter.terms.split(' ');
            var tags = filter.tags;
            var levels = filter.levels;

            var tmp = [];

            angular.forEach(websites, function (website) {
                //FIRST filter by Tags AND Levels (AND operator)
                //check tags
                if (tags.length) {
                    angular.forEach(website.tags, function (tag) {
                        //tag selected
                        if (_.some(tags, function (t) {
                                return t.id === tag.id;
                            })) {
                            addUnique(website, tmp);
                        }
                    });
                }
            });

            websites = tags.length ? tmp : websites;
            if (levels.length) {
                tmp = [];
                angular.forEach(websites, function (website) {
                    //check objective levels

                    if (_.any(levels, function (level) {
                            return _.any(website.objectives, function (objective) {
                                return _.some(objective.levels, function (l) {
                                    return l.level > 0 && l.group.id === level.id;
                                })
                            });
                        })) {
                        addUnique(website, tmp);
                    }
                });
            }

            //Within these results filter by terms (OR operator)
            websites = tags.length || levels.length ? tmp : websites;
            if (terms) {
                angular.forEach(websites, function (website) {
                        //check name and description
                        if (_.some(terms, function (t) {
                                return nameContainsTerm(website.name, t) ||
                                    descriptionContainsTerm(website.description, t) ||
                                    objectivesContainsTerm(website.objectives, t);
                            })) {
                            addUnique(website, filtered);
                        }
                    }
                );
            } else {
                filtered = tmp;
            }

            return filtered;

            function addUnique(website, list) {
                if (list.indexOf(website) === -1) {
                    list.push(website);
                }
            }

            function nameContainsTerm(name, term) {
                return name && _.contains(name.toLowerCase(), term.toLowerCase());
            }

            function descriptionContainsTerm(description, term) {
                return description && _.contains(description.toLowerCase(), term.toLowerCase());
            }

            function objectivesContainsTerm(objectives, term) {
                return _.some(objectives, function (o) {
                    return o && (_.contains(o.code.toLowerCase(), term.toLowerCase()) ||
                        _.contains(o.name.toLowerCase(), term.toLowerCase());
                });
            }
        }


    }
})
();