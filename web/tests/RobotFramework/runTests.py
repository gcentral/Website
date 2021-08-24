from time import gmtime, strftime
import os

tsString = strftime("%Y.%m.%d-%H.%M.%S", gmtime())

cmd = "py -m robot -d Scripts/results/Run%s scripts/valid_login.robot"%(tsString)

os.system(cmd)