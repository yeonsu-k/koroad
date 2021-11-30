# x <- rnorm(6,0,1)
# jpeg(filename="test.jpg", width=500, height=500)
# hist(x, col="yellow")
# dev.off()


# my_rscript.R<font></font>

x <- rnorm(6,0,1)
png(filename="temp.jpg", width=500, height=500)
hist(x, col="lightblue")
dev.off()

# my_rscript.R

