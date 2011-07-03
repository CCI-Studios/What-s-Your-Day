# repository info
set :branch, "development"

# This may be the same as your `Web` server
role :app, "whatsyourday.com"

# directories
set :deploy_to, "/home/whatsyou/subdomains/v2"
set :public, "#{deploy_to}/public_html"
set :extensions, %w[com_cci com_wyd plg_ie6 public template]
