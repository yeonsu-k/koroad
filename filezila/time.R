# install.packages("httr")

#library(httr)

POST(
  url = NULL,
  config = list(),
  ...,
  body = NULL,
  encode = c("multipart", "form", "json", "raw"),
  handle = NULL
)
url <- ("http://kenpom.com/team.php?team=Rice")

login <- list(
  email = "login",
  password = "password"
)
