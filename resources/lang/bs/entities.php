<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Nedavno napravljen',
    'recently_created_pages' => 'Nedavno napravljene stranice',
    'recently_updated_pages' => 'Nedavno ažurirane stranice',
    'recently_created_chapters' => 'Nedavno napravljena poglavlja',
    'recently_created_books' => 'Nedavno napravljene knjige',
    'recently_created_shelves' => 'Nedavno napravljene police',
    'recently_update' => 'Nedavno ažurirana',
    'recently_viewed' => 'Nedavno pogledana',
    'recent_activity' => 'Nedavna aktivnost',
    'create_now' => 'Napravi jednu sada',
    'revisions' => 'Promjene',
    'meta_revision' => 'Promjena #:revisionCount',
    'meta_created' => 'Napravljena :timeLength',
    'meta_created_name' => 'Napravljena :timeLength od :user',
    'meta_updated' => 'Ažurirana :timeLength',
    'meta_updated_name' => 'Ažurirana :timeLength od :user',
    'meta_owned_name' => 'Vlasnik je :user',
    'entity_select' => 'Odaberi entitet',
    'images' => 'Slike',
    'my_recent_drafts' => 'Moje nedavne skice',
    'my_recently_viewed' => 'Moji nedavni pregledi',
    'no_pages_viewed' => 'Niste pogledali nijednu stranicu',
    'no_pages_recently_created' => 'Nijedna stranica nije napravljena nedavno',
    'no_pages_recently_updated' => 'Niijedna stranica nije ažurirana nedavno',
    'export' => 'Izvezi',
    'export_html' => 'Sadržani web fajl',
    'export_pdf' => 'PDF fajl',
    'export_text' => 'Plain Text fajl',

    // Permissions and restrictions
    'permissions' => 'Dozvole',
    'permissions_intro' => 'Jednom omogućene, ove dozvole imaju prednost nad dozvolama uloge.',
    'permissions_enable' => 'Omogući prilagođena dopuštenja',
    'permissions_save' => 'Snimi dozvole',
    'permissions_owner' => 'Vlasnik',

    // Search
    'search_results' => 'Rezultati pretrage',
    'search_total_results_found' => ':count rezultata je nađeno|:count ukupno rezultata je nađeno',
    'search_clear' => 'Očisti pretragu',
    'search_no_pages' => 'Nijedna stranica nije nađena',
    'search_for_term' => 'Traži :term',
    'search_more' => 'Više rezultata',
    'search_advanced' => 'Napredna pretraga',
    'search_terms' => 'Pojmovi za pretragu',
    'search_content_type' => 'Vrsta sadržaja',
    'search_exact_matches' => 'Tačna podudaranja',
    'search_tags' => 'Pretraga oznaka',
    'search_options' => 'Opcije',
    'search_viewed_by_me' => 'Ja sam pogledao/la',
    'search_not_viewed_by_me' => 'Nisam pogledao/la',
    'search_permissions_set' => 'Dozvole',
    'search_created_by_me' => 'Ja sam napravio/la',
    'search_updated_by_me' => 'Ja sam ažurirao/la',
    'search_date_options' => 'Date Options',
    'search_updated_before' => 'Updated before',
    'search_updated_after' => 'Updated after',
    'search_created_before' => 'Created before',
    'search_created_after' => 'Created after',
    'search_set_date' => 'Set Date',
    'search_update' => 'Update Search',

    // Shelves
    'shelf' => 'Shelf',
    'shelves' => 'Shelves',
    'x_shelves' => ':count Shelf|:count Shelves',
    'shelves_long' => 'Bookshelves',
    'shelves_empty' => 'No shelves have been created',
    'shelves_create' => 'Create New Shelf',
    'shelves_popular' => 'Popular Shelves',
    'shelves_new' => 'New Shelves',
    'shelves_new_action' => 'New Shelf',
    'shelves_popular_empty' => 'The most popular shelves will appear here.',
    'shelves_new_empty' => 'The most recently created shelves will appear here.',
    'shelves_save' => 'Save Shelf',
    'shelves_books' => 'Books on this shelf',
    'shelves_add_books' => 'Add books to this shelf',
    'shelves_drag_books' => 'Drag books here to add them to this shelf',
    'shelves_empty_contents' => 'This shelf has no books assigned to it',
    'shelves_edit_and_assign' => 'Edit shelf to assign books',
    'shelves_edit_named' => 'Edit Bookshelf :name',
    'shelves_edit' => 'Edit Bookshelf',
    'shelves_delete' => 'Delete Bookshelf',
    'shelves_delete_named' => 'Delete Bookshelf :name',
    'shelves_delete_explain' => "This will delete the bookshelf with the name ':name'. Contained books will not be deleted.",
    'shelves_delete_confirmation' => 'Are you sure you want to delete this bookshelf?',
    'shelves_permissions' => 'Bookshelf Permissions',
    'shelves_permissions_updated' => 'Bookshelf Permissions Updated',
    'shelves_permissions_active' => 'Bookshelf Permissions Active',
    'shelves_copy_permissions_to_books' => 'Copy Permissions to Books',
    'shelves_copy_permissions' => 'Copy Permissions',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this bookshelf to all books contained within. Before activating, ensure any changes to the permissions of this bookshelf have been saved.',
    'shelves_copy_permission_success' => 'Bookshelf permissions copied to :count books',

    // Books
    'book' => 'Book',
    'books' => 'Books',
    'x_books' => ':count Book|:count Books',
    'books_empty' => 'No books have been created',
    'books_popular' => 'Popular Books',
    'books_recent' => 'Recent Books',
    'books_new' => 'New Books',
    'books_new_action' => 'New Book',
    'books_popular_empty' => 'The most popular books will appear here.',
    'books_new_empty' => 'The most recently created books will appear here.',
    'books_create' => 'Create New Book',
    'books_delete' => 'Delete Book',
    'books_delete_named' => 'Delete Book :bookName',
    'books_delete_explain' => 'Ovo će izbrisati knjigu naziva \':bookName\'. Sve stranice i poglavlja će biti uklonjene.',
    'books_delete_confirmation' => 'Jeste li sigurni da želite izbrisati ovu knjigu?',
    'books_edit' => 'Uredi knjigu',
    'books_edit_named' => 'Uredi knjigu :bookName',
    'books_form_book_name' => 'Naziv knjige',
    'books_save' => 'Spremi knjigu',
    'books_permissions' => 'Dozvole knjige',
    'books_permissions_updated' => 'Dozvole knjige su ažurirane',
    'books_empty_contents' => 'Za ovu knjigu nisu napravljene ni stranice ni poglavlja.',
    'books_empty_create_page' => 'Napravi novu stranicu',
    'books_empty_sort_current_book' => 'Sortiraj trenutnu knjigu',
    'books_empty_add_chapter' => 'Dodaj poglavlje',
    'books_permissions_active' => 'Dozvole za knjigu su aktivne',
    'books_search_this' => 'Pretraži ovu knjigu',
    'books_navigation' => 'Navigacija knjige',
    'books_sort' => 'Sortiraj sadržaj knjige',
    'books_sort_named' => 'Sortiraj knjigu :bookName',
    'books_sort_name' => 'Sortiraj po imenu',
    'books_sort_created' => 'Sortiraj po datumu kreiranja',
    'books_sort_updated' => 'Sortiraj po datumu ažuriranja',
    'books_sort_chapters_first' => 'Poglavlja prva',
    'books_sort_chapters_last' => 'Poglavlja zadnja',
    'books_sort_show_other' => 'Prikaži druge knjige',
    'books_sort_save' => 'Spremi trenutni poredak',

    // Chapters
    'chapter' => 'Poglavlje',
    'chapters' => 'Poglavlja',
    'x_chapters' => ':count Poglavlje|:count Poglavlja',
    'chapters_popular' => 'Popularna poglavlja',
    'chapters_new' => 'Novo poglavlje',
    'chapters_create' => 'Napravi novo poglavlje',
    'chapters_delete' => 'Izbriši poglavlje',
    'chapters_delete_named' => 'Izbriši poglavlje :chapterName',
    'chapters_delete_explain' => 'Ovo će izbrisati poglavlje naziva \':chapterName\'. Sve stranice koje postoje u ovom poglavlju će također biti izbrisane.',
    'chapters_delete_confirm' => 'Jeste li sigurni da želite izbrisati ovo poglavlje?',
    'chapters_edit' => 'Uredi poglavlje',
    'chapters_edit_named' => 'Uredi poglavlje :chapterName',
    'chapters_save' => 'Spremi poglavlje',
    'chapters_move' => 'Premjesti poglavlje',
    'chapters_move_named' => 'Premjesti poglavlje :chapterName',
    'chapter_move_success' => 'Poglavlje premješteno u :bookName',
    'chapters_permissions' => 'Dozvole poglavlja',
    'chapters_empty' => 'U ovom poglavlju trenutno nema stranica.',
    'chapters_permissions_active' => 'Dozvole za poglavlje su aktivne',
    'chapters_permissions_success' => 'Dozvole za poglavlje su ažurirane',
    'chapters_search_this' => 'Pretražuj ovo poglavlje',

    // Pages
    'page' => 'Stranica',
    'pages' => 'Stranice',
    'x_pages' => ':count Stranica|:count Stranice',
    'pages_popular' => 'Popularne stranice',
    'pages_new' => 'Nova stranica',
    'pages_attachments' => 'Attachments',
    'pages_navigation' => 'Page Navigation',
    'pages_delete' => 'Delete Page',
    'pages_delete_named' => 'Delete Page :pageName',
    'pages_delete_draft_named' => 'Delete Draft Page :pageName',
    'pages_delete_draft' => 'Delete Draft Page',
    'pages_delete_success' => 'Page deleted',
    'pages_delete_draft_success' => 'Draft page deleted',
    'pages_delete_confirm' => 'Are you sure you want to delete this page?',
    'pages_delete_draft_confirm' => 'Are you sure you want to delete this draft page?',
    'pages_editing_named' => 'Editing Page :pageName',
    'pages_edit_draft_options' => 'Draft Options',
    'pages_edit_save_draft' => 'Save Draft',
    'pages_edit_draft' => 'Edit Page Draft',
    'pages_editing_draft' => 'Editing Draft',
    'pages_editing_page' => 'Editing Page',
    'pages_edit_draft_save_at' => 'Draft saved at ',
    'pages_edit_delete_draft' => 'Delete Draft',
    'pages_edit_discard_draft' => 'Discard Draft',
    'pages_edit_set_changelog' => 'Set Changelog',
    'pages_edit_enter_changelog_desc' => 'Enter a brief description of the changes you\'ve made',
    'pages_edit_enter_changelog' => 'Enter Changelog',
    'pages_save' => 'Save Page',
    'pages_title' => 'Page Title',
    'pages_name' => 'Page Name',
    'pages_md_editor' => 'Editor',
    'pages_md_preview' => 'Preview',
    'pages_md_insert_image' => 'Insert Image',
    'pages_md_insert_link' => 'Insert Entity Link',
    'pages_md_insert_drawing' => 'Insert Drawing',
    'pages_not_in_chapter' => 'Page is not in a chapter',
    'pages_move' => 'Move Page',
    'pages_move_success' => 'Page moved to ":parentName"',
    'pages_copy' => 'Copy Page',
    'pages_copy_desination' => 'Copy Destination',
    'pages_copy_success' => 'Page successfully copied',
    'pages_permissions' => 'Page Permissions',
    'pages_permissions_success' => 'Page permissions updated',
    'pages_revision' => 'Revision',
    'pages_revisions' => 'Page Revisions',
    'pages_revisions_named' => 'Page Revisions for :pageName',
    'pages_revision_named' => 'Page Revision for :pageName',
    'pages_revision_restored_from' => 'Restored from #:id; :summary',
    'pages_revisions_created_by' => 'Created By',
    'pages_revisions_date' => 'Revision Date',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'Revision #:id',
    'pages_revisions_numbered_changes' => 'Revision #:id Changes',
    'pages_revisions_changelog' => 'Changelog',
    'pages_revisions_changes' => 'Changes',
    'pages_revisions_current' => 'Trenutna verzija',
    'pages_revisions_preview' => 'Pregled',
    'pages_revisions_restore' => 'Vrati',
    'pages_revisions_none' => 'Ova stranica nema promjena',
    'pages_copy_link' => 'Iskopiraj link',
    'pages_edit_content_link' => 'Uredi sadržaj',
    'pages_permissions_active' => 'Dozvole za stranicu su aktivne',
    'pages_initial_revision' => 'Prvo izdavanje',
    'pages_initial_name' => 'Nova stranica',
    'pages_editing_draft_notification' => 'Trenutno uređujete skicu koja je posljednji put snimljena :timeDiff.',
    'pages_draft_edited_notification' => 'Ova stranica je ažurirana nakon tog vremena. Preporučujemo da odbacite ovu skicu.',
    'pages_draft_edit_active' => [
        'start_a' => ':count korisnika je počelo sa uređivanjem ove stranice',
        'start_b' => ':userName has started editing this page',
        'time_a' => 'since the page was last updated',
        'time_b' => 'in the last :minCount minutes',
        'message' => ':start :time. Take care not to overwrite each other\'s updates!',
    ],
    'pages_draft_discarded' => 'Draft discarded, The editor has been updated with the current page content',
    'pages_specific' => 'Specific Page',
    'pages_is_template' => 'Page Template',

    // Editor Sidebar
    'page_tags' => 'Page Tags',
    'chapter_tags' => 'Chapter Tags',
    'book_tags' => 'Book Tags',
    'shelf_tags' => 'Shelf Tags',
    'tag' => 'Tag',
    'tags' =>  'Tags',
    'tag_name' =>  'Tag Name',
    'tag_value' => 'Tag Value (Optional)',
    'tags_explain' => "Add some tags to better categorise your content. \n You can assign a value to a tag for more in-depth organisation.",
    'tags_add' => 'Add another tag',
    'tags_remove' => 'Remove this tag',
    'attachments' => 'Attachments',
    'attachments_explain' => 'Upload some files or attach some links to display on your page. These are visible in the page sidebar.',
    'attachments_explain_instant_save' => 'Changes here are saved instantly.',
    'attachments_items' => 'Attached Items',
    'attachments_upload' => 'Upload File',
    'attachments_link' => 'Attach Link',
    'attachments_set_link' => 'Set Link',
    'attachments_delete' => 'Are you sure you want to delete this attachment?',
    'attachments_dropzone' => 'Drop files or click here to attach a file',
    'attachments_no_files' => 'No files have been uploaded',
    'attachments_explain_link' => 'You can attach a link if you\'d prefer not to upload a file. This can be a link to another page or a link to a file in the cloud.',
    'attachments_link_name' => 'Link Name',
    'attachment_link' => 'Attachment link',
    'attachments_link_url' => 'Link to file',
    'attachments_link_url_hint' => 'Url of site or file',
    'attach' => 'Attach',
    'attachments_insert_link' => 'Add Attachment Link to Page',
    'attachments_edit_file' => 'Edit File',
    'attachments_edit_file_name' => 'File Name',
    'attachments_edit_drop_upload' => 'Drop files or click here to upload and overwrite',
    'attachments_order_updated' => 'Attachment order updated',
    'attachments_updated_success' => 'Attachment details updated',
    'attachments_deleted' => 'Attachment deleted',
    'attachments_file_uploaded' => 'File successfully uploaded',
    'attachments_file_updated' => 'File successfully updated',
    'attachments_link_attached' => 'Link successfully attached to page',
    'templates' => 'Templates',
    'templates_set_as_template' => 'Page is a template',
    'templates_explain_set_as_template' => 'You can set this page as a template so its contents be utilized when creating other pages. Other users will be able to use this template if they have view permissions for this page.',
    'templates_replace_content' => 'Replace page content',
    'templates_append_content' => 'Append to page content',
    'templates_prepend_content' => 'Prepend to page content',

    // Profile View
    'profile_user_for_x' => 'User for :time',
    'profile_created_content' => 'Created Content',
    'profile_not_created_pages' => ':userName has not created any pages',
    'profile_not_created_chapters' => ':userName has not created any chapters',
    'profile_not_created_books' => ':userName has not created any books',
    'profile_not_created_shelves' => ':userName has not created any shelves',

    // Comments
    'comment' => 'Comment',
    'comments' => 'Comments',
    'comment_add' => 'Add Comment',
    'comment_placeholder' => 'Leave a comment here',
    'comment_count' => '{0} No Comments|{1} 1 Comment|[2,*] :count Comments',
    'comment_save' => 'Save Comment',
    'comment_saving' => 'Saving comment...',
    'comment_deleting' => 'Deleting comment...',
    'comment_new' => 'New Comment',
    'comment_created' => 'commented :createDiff',
    'comment_updated' => 'Updated :updateDiff by :username',
    'comment_deleted_success' => 'Comment deleted',
    'comment_created_success' => 'Comment added',
    'comment_updated_success' => 'Comment updated',
    'comment_delete_confirm' => 'Are you sure you want to delete this comment?',
    'comment_in_reply_to' => 'In reply to :commentId',

    // Revision
    'revision_delete_confirm' => 'Are you sure you want to delete this revision?',
    'revision_restore_confirm' => 'Are you sure you want to restore this revision? The current page contents will be replaced.',
    'revision_delete_success' => 'Revision deleted',
    'revision_cannot_delete_latest' => 'Cannot delete the latest revision.'
];