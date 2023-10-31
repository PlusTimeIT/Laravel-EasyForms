=========
Title
=========

Section 1
---------

This is a paragraph in the first section. reStructuredText supports basic text formatting:

- *Italics* with asterisks or underscores.
- **Bold** with double asterisks or double underscores.
- ``Monospace text`` with double backticks.

Section 2
---------

Subsections can be used to organize content:

Subsection 2.1
~~~~~~~~~~~~~~~

Lists are straightforward:

1. First item
2. Second item
    - A sub-item
    - Another sub-item

Links can be added as well:

`Click here for more information <https://example.com>`_.

Tables can be created using a simple syntax:

+-------------+------------+
| Header 1    | Header 2   |
+=============+============+
| Row 1, Col1 | Row 1, Col2|
+-------------+------------+
| Row 2, Col1 | Row 2, Col2|
+-------------+------------+

Footnotes can be added as well [1]_.

.. [1] This is a footnote.

Section 3
---------

You can include images:

.. image:: path/to/image.png
   :alt: Alternate text

Code blocks can be included too:

.. code-block:: python

    def example_function():
        print("This is an example function.")

Math equations can be written using LaTeX:

.. math::

    \frac{n!}{k!(n-k)!} = \binom{n}{k}
