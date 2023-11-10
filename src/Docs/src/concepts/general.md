# Concepts
This package was built with the idea that you create the form, handle its actions (loading, processing etc.)
and the package does the rest.

To make things easy most components follow all props related to their vuetify counterpart, so within the documentation
only the additional props will be included (and also a list of props not included)

## Classes and Functions
All classes that can be created statically have the `Createable` trait. 
This comes with a self building function that sets all supplied properties. This can be done
via the `make()` or the `create()` function. When creating your properties can also be passed as an array or arguments
and these will also be assigned.

All properties for classes are currently protected, so they come with their own setters and getters. 
All setters return the class instance making them chainable.