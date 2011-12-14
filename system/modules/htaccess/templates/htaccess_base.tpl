# !!!!!!!!!! WARNING !!!!!!!!!!
#
# this file is automatic generated!
# do not modify directly, use the htaccess builder!
#
# !!!!!!!!!! WARNING !!!!!!!!!!

##
# Prevent access to the Contao template files
##
<FilesMatch "\.(tpl|html5|xhtml)$">
	Order allow,deny
	Deny from all
</FilesMatch>

<?php echo $this->modules; ?>

# Block access to "hidden" directories whose names begin with a period. This
# includes directories used by version control systems such as Subversion or Git.
<IfModule mod_rewrite.c>
	RewriteRule "(^|/)\." - [F]
</IfModule>


# Block access to backup and source files
# This files may be left by some text/html editors and
# pose a great security danger, when someone can access them
<FilesMatch ".(bak|config|sql|fla|psd|ini|log|sh|inc|~|swp)$">
  Order allow,deny
  Deny from all
  Satisfy All
</FilesMatch>

# Increase cookie security
<IfModule php5_module>
	php_value session.cookie_httponly true
</IfModule>
