import sdk.python.entities
from sdk.python.util.item_types import item_type
from sdk.python.entities import Property


class BidItem(sdk.python.entities.Entity):

    resource = '/bid_items'
    json_name = 'bid_item'

    id = Property(int)
    type = Property(int)
    quantity = Property(int)
    description = Property(str)
    unit_price = Property(float)  # unit cents in db

    def item_total(self):
        """ Calculate the total of the item by
            multiplying the unit_price and quantity. It then
            returns the total
        """
        return self.quantity * self.unit_price

    def item_type_name(self):
        """ Return name of the bid_item type instead of type id """
        return item_type[self.type]


class BidItems(sdk.python.entities.Resource):

    entity_class = BidItem
    json_name = 'bidItem'


bid_items = BidItems()
