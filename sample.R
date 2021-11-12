x <- rnorm(6,0,1)
jpeg(filename="test.jpg", width=500, height=500)
hist(x, col="red")
dev.off()