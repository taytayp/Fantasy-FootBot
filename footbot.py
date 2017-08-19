#import the h2o module
import h2o

#initialize h2o server locally
h2o.init()

#The following code is example code from a beginner tutorial found here: https://www.youtube.com/watch?v=yjqmVHA2cFM
#For verification purposes, the final output should match the "predict" output in the youtube video at 27:16

#Import the CSV file of the dataset
#For our purposes, this will likely be the FF CSV files
wine = h2o.import_file("winequality-white.csv")

#Set up features vs. target. In this case the "target" value is 'quality' and the rest are just features
#For our purposes, this will probably be something like "actual points" or whatever we determine is meaningful.
features = list(wine.columns)
features.remove('quality')

#Split the data into two different parts - training and testing
#We don't want to "train" it on 100% of the data, at that point it just memorizes it and can't generalize
#So we give it 80% of the data for training and feed it the remaining 20% to test the generalization
wine_split = wine.split_frame(ratios = [0.8], seed = 1234)

wine_train = wine_split[0]
wine_test = wine_split[1]

#Build a generalized linear model with default settings
#Import the function for GLM
from h2o.estimators.glm import H2OGeneralizedLinearEstimator

#Set up GLM for regression. This may be a place where we chance some settings/dig around for best fit models.
glm_default = H2OGeneralizedLinearEstimator(family= 'gaussian', model_id = 'glm_default')
 
#Use .train() to build the model
glm_default.train(x = features, y = 'quality', training_frame = wine_train)

#Check the model performance on training set
#This might be worse than it will be after we run the test set, it only gets better
glm_default

#Check the model performance on test dataset
glm_default.model_performance(wine_test)

#Use GLM model to make predictions
#This just uses the wine_test sample again, but we could use this on, say, a CSV of the projections for the upcoming FF week
#We'll just replace it where we wrote "wine_test" below
yhat_test_glm = glm_default.predict(wine_test)

#Print out the first five predictions of wine 'quality'
print yhat_test_glm.head(5)