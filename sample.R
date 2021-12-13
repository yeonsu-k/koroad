#! /usr/bin/env Rscript
set.seed(1)
data=rnorm(100,170,5)
png(filename="test.png",width=500,height=500)
hist(data)
dev.off()
