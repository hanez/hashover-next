<?php

// Copyright (C) 2015-2019 Jacob Barkdull
// This file is part of HashOver.
//
// I, Jacob Barkdull, hereby release this work into the public domain.
// This applies worldwide. If this is not legally possible, I grant any
// entity the right to use this work for any purpose, without any
// conditions, unless such conditions are required by law.


// Romanian text for forms, buttons, links, and tooltips
$locale = array (
	'comment-form'		=> 'Scrie comentariu aici...',
	'reply-form'		=> 'Scrie reply aici...',
	'comment-formatting'	=> 'Formatarea',
	'accepted-format'	=> 'Caractere %s acceptate',
	'accepted-html'		=> '&lt;b&gt;, &lt;strong&gt;, &lt;u&gt;, &lt;i&gt;, &lt;em&gt;, &lt;s&gt;, &lt;big&gt;, &lt;small&gt;, &lt;sup&gt;, &lt;sub&gt;, &lt;pre&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;, &lt;blockquote&gt;, &lt;code&gt; escapes HTML, URL automat devin link si [img]URL[/img] se deschid in alt tab.',
	'accepted-markdown'	=> '**Bold**, _subliniat_, *cursiv*, ~~barate~~, `evidențiați`, ```cod``` scapă HTML. HTML și Markdown pot fi utilizate împreună în comentariu.',
	'post-button'		=> 'Posteaza Comentariu',
	'login'			=> 'Conectează-te',
	'login-tip'		=> 'Conectează-te (optionale)',
	'logout'		=> 'Deconectează-te',
	'be-first-name'		=> 'Niciun comentariu pana acum.',
	'pending-name'		=> 'În așteptarea...',
	'deleted-name'		=> 'Sters...',
	'error-name'		=> 'Eroare...',
	'be-first-note'		=> 'Fii primul care comenteaza!',
	'login-required'	=> 'Trebuie să fii logat pentru a comenta!',
	'pending-note'		=> 'Acest comentariu este în curs de aprobare.',
	'deleted-note'		=> 'Acest comentariu a fost șters.',
	'error-note'		=> 'Ceva n-a mers bine. Nu a putut prelua acest comentariu.',
	'options'		=> 'Optiuni',
	'cancel'		=> 'Renunta',
	'reply-to-comment'	=> 'Reply la comentariu',
	'edit-your-comment'	=> 'Editare comentariu',
	'optional'		=> 'Optionale',
	'required'		=> 'Obligatoriu',
	'name'			=> 'Nume',
	'name-tip'		=> 'Nume (%s)',
	'password'		=> 'Parola',
	'password-tip'		=> 'Parola (%s, permite să editați sau să ștergeți acest comentariu)',
	'confirm-password'	=> 'Confirmă Parola',
	'email'			=> 'Adresa E-mail',
	'email-tip'		=> 'Adresa E-mail (%s, pentru notificări prin e-mail)',
	'website'		=> array ('Website', 'Websites'),
	'website-tip'		=> 'Website (%s)',
	'logged-in'		=> 'Conectare reusita!',
	'logged-out'		=> 'Conectare eșec!',
	'comment-needed'	=> 'Tu nu a reușit să introduceți un comentariu adecvat. Vă rugăm să încercați din nou.',
	'reply-needed'		=> 'Tu nu a reușit să introduceți un reply adecvat. Vă rugăm să încercați din nou.',
	'field-needed'		=> '"%s" Câmpul de Este obligatoriu.',
	'post-fail'		=> 'Eșec! Tu lipse permisiunea suficientă.',
	'comment-deleted'	=> 'Comentariu sters!',
	'post-reply'		=> 'Adauga Reply',
	'delete'		=> 'Sterge',
	'permanently-delete'	=> 'Permiteți ștergerea definitivă',
	'subscribe'		=> 'Notifica-ma de raspunsuri',
	'subscribe-tip'		=> 'Subscribe la notificari pe mail',
	'edit-comment'		=> 'Editare comentariu',
	'status'		=> 'Stare',
	'status-approved'	=> 'Aprobat',
	'status-pending'	=> 'În așteptarea aprobării',
	'status-deleted'	=> 'Marcate șters',
	'save'			=> 'Salveaza',
	'no-email-warning'	=> 'Fara adresa de e-mail, NU vei primi notificari cand cineva raspunde la comentariul tau!',
	'invalid-email'		=> 'Cele adresa de e-mail pe care ați introdus nu este valid.',
	'delete-comment'	=> 'Sigur doresti stergerea comentariului?',
	'post-comment-on'	=> array ('Adauga comentariu', 'Adauga comentariu la "%s"'),
	'most-popular-comments'	=> array ('Cele mai populare Comentariu', 'Cele mai populare Comentarii'),
	'showing-comments'	=> array ('%d Comentariu', '%d Comentarii'),
	'count-replies'		=> array ('%d numărare răspuns', '%d numărare răspunsuri'),
	'sort'			=> 'Sortare',
	'sort-ascending'	=> 'Ascendent',
	'sort-descending'	=> 'Descendent',
	'sort-by-date'		=> 'Cele mai noi',
	'sort-by-likes'		=> 'Dupa Like-uri',
	'sort-by-replies'	=> 'Dupa răspunsuri',
	'sort-by-discussion'	=> 'Dupa discuții',
	'sort-by-popularity'	=> 'Dupa popularitate',
	'sort-by-name'		=> 'Dupa user',
	'sort-threads'		=> 'Fire',
	'thread'		=> 'Ca răspuns la %s',
	'thread-tip'		=> 'Top inceput comentariu',
	'comments'		=> 'Comentarii',
	'replies'		=> 'răspunsuri',
	'edit'			=> 'Editare',
	'reply'			=> 'Reply',
	'like'			=> array ('Like', 'Like-uri'),
	'liked'			=> 'Liked',
	'unlike'		=> 'Unlike',
	'like-comment'		=> '\'Like\' acest comentariu',
	'liked-comment'		=> 'Tu \'Liked\' acest comentariu',
	'dislike'		=> array ('Dislike', 'Dislike-uri'),
	'disliked'		=> 'Disliked',
	'dislike-comment'	=> '\'Dislike\' acest comentariu',
	'disliked-comment'	=> 'Tu \'Disliked\' acest comentariu',
	'commenter-tip'		=> 'Tu nu va fi notificat prin e-mail',
	'subscribed-tip'	=> 'va fi notificat prin e-mail',
	'unsubscribed-tip'	=> 'nu este abonat la notificări prin e-mail',
	'show-other-comments'	=> array ('Arata %d Alte Comentariu', 'Arata %d Alte Comentarii'),
	'show-number-comments'	=> array ('Arata %d Comentariu', 'Arata %d Comentarii'),
	'date-years'		=> array ('%d an in urma', '%d ani in urma'),
	'date-months'		=> array ('%d lună în urmă', '%d luni în urmă'),
	'date-days'		=> array ('%d zi în urmă', '%d zile în urmă'),
	'date-today'		=> '%s astăzi',
	'untitled'		=> 'Fără Titlu',
	'external-image-tip'	=> 'Click pentru a vizualiza imaginea externă',
	'loading'		=> 'Se incarca...',
	'click-to-close'	=> 'Click pentru a închide',
	'hashover-comments'	=> 'HashOver Comentarii',
	'rss-feed'		=> 'RSS Feed',
	'source-code'		=> 'Cod Sursa',
	'new-comment'		=> 'Comentariu nou',
	'from'			=> 'De la %s',
	'comment'		=> 'Comentariu',
	'page'			=> 'Pagină',
	'sent-by'		=> 'Acest e-mail a fost trimis de %s prin HashOver.',

	'source-code-sub'	=> 'Vizualizatorul codului sursă HashOver de pe server',
	'type'			=> 'Tip',
	'path'			=> 'Cale',
	'view-as'		=> 'Vizualizare ca',
	'text'			=> 'Text',
	'download'		=> 'Descărcare',

	'documentation'		=> 'Documentație',
	'coming-soon'		=> 'Vino în curând',
	'example'		=> 'Exemplu',
	'back'			=> 'Înapoi',
	'value'			=> 'Valoare',

	'successful-save'	=> 'Salvat cu succes!',
	'failed-to-save'	=> 'Sa salvat! Verificați permisiunile.',
	'permissions-info'	=> 'Acordați permisiunile "%s" 0755 și proprietatea pentru utilizatorul "%s".',

	'admin'			=> 'Admin',
	'moderation'		=> 'Moderare',
	'block-ip-addresses'	=> 'Blocați adresele IP',
	'filter-url-queries'	=> 'Filtre interogări URL',
	'check-for-updates'	=> 'Verificați pentru actualizări',
	'settings'		=> 'Setări',

	'admin-required'	=> 'Trebuie să fii logat ca administrator',

	'blocklist-title'	=> 'Listă de blocare a adresei IP',
	'blocklist-sub'		=> 'Blocați adresele IP specifice',
	'blocklist-ip-tip'	=> 'Adresă IP sau gol pentru a fi eliminat',

	'url-queries-title'	=> 'Interogări de adrese URL ignorate',
	'url-queries-sub'	=> 'Filtrați interogările adreselor URL care ar trebui ignorate',
	'url-queries-name-tip'	=> 'Nume de interogare sau gol pentru a fi eliminat',
	'url-queries-value-tip'	=> 'Valoare interogare sau gol pentru orice valoare',

	'settings-sub'		=> 'Schimbarea diferitelor setări',
	'moderation-sub'	=> 'Postați, editați, aprobați și ștergeți comentariile',

	'general'		=> 'General',
	'e-mail'		=> 'E-mail',
	'cookies'		=> 'Cookie-urile',
	'comment-collapsing'	=> 'Comentariu colaps',
	'popular-comments'	=> 'Comentarii populare',
	'spam-protection'	=> 'Protectie spam',
	'avatars'		=> 'Avatare',
	'form-fields'		=> 'Formă/Câmpuri',
	'date-time'		=> 'Data/ora',
	'technical'		=> 'Tehnic',

	'setting-language'			=> 'Limba',
	'setting-theme'				=> 'Tema',
	'setting-default-sorting'		=> 'Ordinea de sortare a comentariilor implicite',
	'setting-uses-moderation'		=> 'Comentarii postate de utilizatori normali necesită moderare',
	'setting-pends-user-edits'		=> 'Comentariile editate de utilizatorii normali necesită moderare',
	'setting-data-format'			=> 'Format de date pentru comentarii',
	'setting-mailer'			=> 'Metoda de difuzare prin e-mail de notificare',
	'setting-mail-type'			=> 'Formatul e-mailurilor de notificare',
	'setting-default-name'			=> 'Numele implicit de comentator',
	'setting-allows-images'			=> 'Permite afișarea imaginilor în comentarii',
	'setting-allows-login'			=> 'Permite utilizatorilor să se autentifice',
	'setting-allows-likes'			=> 'Permite utilizatorilor să placă comentariile',
	'setting-allows-dislikes'		=> 'Permite utilizatorilor să nu-i placă comentariile',
	'setting-uses-ajax'			=> 'Activarea caracteristicilor JavaScript asincrone',
	'setting-collapses-interface'		=> 'Restrângeți întreaga interfață utilizator HashOver',
	'setting-collapses-comments'		=> 'Reduceți numărul de comentarii configurabile',
	'setting-collapse-limit'		=> 'Număr de comentarii pentru restrângere',
	'setting-reply-mode'			=> 'Modul de afișare a firelor de comentarii',
	'setting-stream-depth'			=> 'Numărul indiciilor de răspuns înainte ca fluxul să fie aplatizat',
	'setting-popularity-threshold'		=> 'Numărul net de favoriri a unui comentariu trebuie să fie popular',
	'setting-popularity-limit'		=> 'Numărul de comentarii populare de afișat',
	'setting-uses-markdown'			=> 'Activați suportul Markdown',
	'setting-server-timezone'		=> 'Fusul orar al serverului',
	'setting-uses-user-timezone'		=> 'Afișează datele / orele în fusul orar al utilizatorului (modul JavaScript)',
	'setting-uses-short-dates'		=> 'Activați date / ore mai scurte (exemplu "acum 1 zi")',
	'setting-time-pattern'			=> 'Format de timp, utilizați "HH:mm" pentru formatul de 24 de ore',
	'setting-date-pattern'			=> 'Formatul datei',
	'setting-displays-title'		=> 'Activați afișarea titlului paginii',
	'setting-form-position'			=> 'Poziția pentru formularul de comentariu primar',
	'setting-uses-auto-login'		=> 'Inregistreaza automat utilizatorii atunci cand posteaza comentarii',
	'setting-shows-reply-count'		=> 'Afișați răspunsul afișat separat din numărul total',
	'setting-count-includes-deleted'	=> 'Include comentariile șterse în conturile de comentarii',
	'setting-icon-mode'			=> 'Modul de afișare a imaginilor în Avatar',
	'setting-icon-size'			=> 'Dimensiunea pictogramei Avatar',
	'setting-image-format'			=> 'Format pentru pictograme și alte imagini',
	'setting-uses-labels'			=> 'Afișați etichete deasupra intrărilor',
	'setting-uses-cancel-buttons'		=> 'Afișați butoanele de anulare în formularele de comentarii',
	'setting-appends-css'			=> 'Adăugați automat HashOver CSS în pagină',
	'setting-appends-rss'			=> 'Adăugați link-uri HashOver RSS feeds to page',
	'setting-login-method'			=> 'Sistem de conectare utilizator',
	'setting-sets-cookies'			=> 'Activați cookie-urile',
	'setting-secure-cookies'		=> 'Utilizați cookie-urile securizate HTTPS',
	'setting-stores-ip-address'		=> 'Activați stocarea adreselor IP utilizator',
	'setting-subscribes-user'		=> 'Abonează-l pe utilizator să trimită notificări prin e-mail în mod implicit',
	'setting-allows-user-replies'		=> 'Setați e-mail-ul utilizator ca "Răspundeți-vă" în notificările de răspuns',
	'setting-noreply-email'			=> 'Adresa de e-mail utilizată în notificările de e-mail către utilizatorii normali',
	'setting-spam-batabase'			=> 'Locația bazei de date SPAM',
	'setting-spam-check-modes'		=> 'Moduri pentru a efectua verificarea SPAM sub',
	'setting-gravatar-force'		=> 'Folosiți imagini Gravatar tematice în loc de avataruri',
	'setting-gravatar-default'		=> 'Tema Gravatar implicită pentru utilizare',
	'setting-minifies-javascript'		=> 'Activați minificarea JavaScript',
	'setting-minify-level'			=> 'Nivel de minime JavaScript',
	'setting-allow-local-metadata'		=> 'Permiteți actualizarea metadatelor de pagină de la localhost'
);
