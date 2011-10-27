Bacon - ZF2 common code across projects
=======================================

Introduction
------------
Bacon is a library containing useful components used across many projects.
Everything is licensed under the New BSD license (see LICENSE file).

Components
----------
The library currently contains the following components:

*   **Bacon\Text\Highlight**
    Source code highlighter.

    This is a port of the highlight program by Andrew Simon. It uses a converted
    form of its language definitions, and an adapted form of the its source code
    parser. This makes it possible to highlight more than 150 languages in
    different output formats.

*   **Bacon\Text\Slugifier**
    URI-friendly slug generator.

    You sometimes need to display a text value in a URI, like for instance the
    title of an article in a blog URL, like those generated by wordpress. This
    component helps you to generate such a usable slug. It interally makes use
    of the Bacon\Text\UniDecode component also provided by this library.

*   **Bacon\Text\UniDecode**
    US-ASCII transliterations of Unicode text.

    It often happens that you have non-Roman text data in Unicode, but you can't
    display it -- usually because you're trying to show it to a user via an
    application that doesn't support Unicode, or because the fonts you need
    aren't accessible. You could represent the Unicode characters as "???????"
    or " BA A0q0...", but that's nearly useless to the user who actually wants
    to read what the text says.

    What this component provides is a method, 'decode(...)' that takes Unicode
    data and tries to represent it in ASCII characters (i.e., the universally
    displayable characters between 0x00 and 0x7F). The representation is almost
    always an attempt at transliteration -- i.e., conveying, in Roman letters,
    the pronunciation expressed by the text in some other writing system.

    For example "$decoder->decode('北亰')" returns "Bei Jing".

    This is a PHP port of the UniDecode Python module, which on the other hand
    is a port of the Text::Unidecode Perl module by Sean M. Burke
    <sburke@cpan.org>.

