library(ggplot2)

jpeg(width = 500, height = 500, filename = "test.jpg")
ggplot(diamonds, aes(carat, price)) + geom_line(aes(colour = clarity))
dev.off()

# R Plot 여러개 하나 파일에 pdf로 저장하기 : https://koos808.tistory.com/66

