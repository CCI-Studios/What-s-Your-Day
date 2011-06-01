# repository info
set :branch, "development"

# This may be the same as your `Web` server
role :app, "whatsyourday.com"

# directories
set :deploy_to, "/home/wyd/subdomains/dev"
set :public, "#{deploy_to}/public_html"
set :extensions, %w[plg_ie6 public template]
